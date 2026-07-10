<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Tests;

use DealNews\SchemaOrg\Type\FoodEstablishment;
use DealNews\SchemaOrg\Type\GenderType;
use DealNews\SchemaOrg\Type\GeoCoordinates;
use DealNews\SchemaOrg\Type\ItemAvailability;
use DealNews\SchemaOrg\Type\LocalBusiness;
use DealNews\SchemaOrg\Type\Offer;
use DealNews\SchemaOrg\Type\Organization;
use DealNews\SchemaOrg\Type\Person;
use DealNews\SchemaOrg\Type\Place;
use DealNews\SchemaOrg\Type\Product;
use DealNews\SchemaOrg\Type\Restaurant;
use DealNews\SchemaOrg\Type\Thing;
use PHPUnit\Framework\TestCase;

/**
 * Covers behavior specific to the generated Schema.org type classes: the
 * primary-parent inheritance chain, multi-parent property flattening, and
 * enumeration member constants.
 */
class GeneratedTypesTest extends TestCase {

    public function testRestaurantInheritsAlongItsPrimaryParentChain(): void {
        $restaurant = new Restaurant();

        $this->assertInstanceOf(FoodEstablishment::class, $restaurant);
        $this->assertInstanceOf(LocalBusiness::class, $restaurant);
        $this->assertInstanceOf(Organization::class, $restaurant);
        $this->assertInstanceOf(Thing::class, $restaurant);
    }

    public function testLocalBusinessDoesNotInheritItsSecondaryParent(): void {
        // Schema.org models LocalBusiness as both an Organization and a
        // Place. PHP only supports single inheritance, so the generator
        // picks Organization (the first-listed parent) for `extends` and
        // flattens Place's own properties directly onto LocalBusiness
        // instead -- `instanceof Place` does not hold. See README.
        $business = new LocalBusiness();

        $this->assertNotInstanceOf(Place::class, $business);
    }

    public function testLocalBusinessCarriesPropertiesFromBothParents(): void {
        $business = new LocalBusiness();

        // legalName comes from Organization (the primary/`extends` parent).
        $business->legalName = 'Acme Corp';

        // geo's domain is Place only; the generator flattens it directly
        // onto LocalBusiness since Place is the secondary (non-`extends`)
        // parent and its properties aren't otherwise reachable.
        $geo      = new GeoCoordinates();
        $geo->latitude  = 40.7128;
        $geo->longitude = -74.006;
        $business->geo  = $geo;

        $data = $business->toArray();

        $this->assertSame('Acme Corp', $data['legalName']);
        $this->assertSame(40.7128, $data['geo']['latitude']);
    }

    public function testProductWithNestedOfferRoundTripsThroughJson(): void {
        $offer = new Offer();
        $offer->price         = '19.99';
        $offer->priceCurrency = 'USD';
        $offer->availability  = ItemAvailability::IN_STOCK;

        $product         = new Product();
        $product->id     = 'https://example.com/products/123';
        $product->name   = 'Widget';
        $product->offers = $offer;

        $decoded = json_decode($product->toJsonLdString(), true);

        $this->assertSame('Product', $decoded['@type']);
        $this->assertSame('https://example.com/products/123', $decoded['@id']);
        $this->assertSame('Widget', $decoded['name']);
        $this->assertSame('Offer', $decoded['offers']['@type']);
        $this->assertSame('19.99', $decoded['offers']['price']);
        $this->assertSame(
            'https://schema.org/InStock',
            $decoded['offers']['availability'],
        );
    }

    public function testEnumerationMemberConstantsHoldTheirIri(): void {
        $this->assertSame('https://schema.org/Male', GenderType::MALE);
        $this->assertSame('https://schema.org/Female', GenderType::FEMALE);
        $this->assertSame(
            'https://schema.org/InStock',
            ItemAvailability::IN_STOCK,
        );
    }

    public function testFromArrayHydratesFlatScalarProperties(): void {
        $person = new Person();
        $person->fromArray([
            'name'  => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $this->assertSame('Jane Doe', $person->name);
        $this->assertSame('jane@example.com', $person->email);
        $this->assertSame('Person', $person->toArray()['@type']);
    }
}
