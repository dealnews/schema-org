<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Tests;

use DealNews\SchemaOrg\Type\Offer;
use DealNews\SchemaOrg\Type\Person;
use DealNews\SchemaOrg\Type\Product;
use PHPUnit\Framework\TestCase;

/**
 * Covers the JSON-LD shaping behavior added by JsonLdNode on top of
 * Moonspot\ValueObjects\ValueObject: @context/@type/@id placement, null
 * omission, and script-tag escaping.
 */
class JsonLdNodeTest extends TestCase {

    public function testTopLevelOutputIncludesContextTypeAndId(): void {
        $product = new Product();
        $product->id   = 'https://example.com/products/123';
        $product->name = 'Widget';

        $data = $product->toJsonLd();

        $this->assertSame('https://schema.org', $data['@context']);
        $this->assertSame('Product', $data['@type']);
        $this->assertSame('https://example.com/products/123', $data['@id']);
        $this->assertSame('Widget', $data['name']);
    }

    public function testNestedNodeDoesNotRepeatContext(): void {
        $offer = new Offer();
        $offer->price         = '19.99';
        $offer->priceCurrency = 'USD';

        $product         = new Product();
        $product->name   = 'Widget';
        $product->offers = $offer;

        $data = $product->toJsonLd();

        $this->assertArrayNotHasKey('@context', $data['offers']);
        $this->assertSame('Offer', $data['offers']['@type']);
        $this->assertSame('19.99', $data['offers']['price']);
    }

    public function testUnsetPropertiesAreOmitted(): void {
        $product       = new Product();
        $product->name = 'Widget';

        $data = $product->toArray();

        $this->assertArrayHasKey('name', $data);
        $this->assertArrayNotHasKey('description', $data);
        $this->assertArrayNotHasKey('offers', $data);
        $this->assertArrayNotHasKey('@id', $data);
    }

    public function testIdIsOmittedWhenNotSet(): void {
        $person = new Person();
        $person->name = 'Jane Doe';

        $data = $person->toArray();

        $this->assertArrayNotHasKey('@id', $data);
    }

    public function testMultiValuePropertyDropsEmptyEntries(): void {
        $product       = new Product();
        $product->name = ['Widget', '', null, 'Gadget'];

        $data = $product->toArray();

        $this->assertSame(['Widget', 'Gadget'], $data['name']);
        $this->assertSame(
            json_encode(['Widget', 'Gadget']),
            json_encode($data['name']),
        );
    }

    public function testToJsonLdStringIncludesContext(): void {
        $person = new Person();
        $person->name = 'Jane Doe';

        $json    = $person->toJsonLdString();
        $decoded = json_decode($json, true);

        $this->assertSame('https://schema.org', $decoded['@context']);
        $this->assertSame('Person', $decoded['@type']);
    }

    public function testJsonEncodeOfTopLevelObjectIncludesContext(): void {
        $person       = new Person();
        $person->name = 'Jane Doe';

        $decoded = json_decode(json_encode($person), true);

        $this->assertSame('https://schema.org', $decoded['@context']);
    }

    public function testScriptTagEscapesEmbeddedClosingTag(): void {
        $person       = new Person();
        $person->name = '</script><script>alert(1)</script>';

        $tag = $person->toJsonLdScriptTag();

        $this->assertStringStartsWith(
            '<script type="application/ld+json">',
            $tag,
        );
        $this->assertStringEndsWith('</script>', $tag);
        $this->assertStringNotContainsString(
            '</script><script>alert(1)</script>',
            $tag,
        );
    }
}
