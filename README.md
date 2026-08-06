# dealnews/schema-org

Schema.org value objects, generated from the official vocabulary, built on
top of [moonspot/value-objects](https://github.com/brianlmoon/value-objects).
Every Schema.org type is a typed PHP class you can build up and emit as
JSON-LD.

## Install

```
composer require dealnews/schema-org
```

## Usage

```php
use DealNews\SchemaOrg\Type\Product;
use DealNews\SchemaOrg\Type\Offer;

$offer = new Offer();
$offer->price         = '19.99';
$offer->priceCurrency = 'USD';

$product         = new Product();
$product->id     = 'https://example.com/products/123'; // @id
$product->name   = 'Widget';
$product->offers = $offer;

echo $product->toJsonLdString(pretty: true);
// {
//     "@context": "https://schema.org",
//     "@type": "Product",
//     "@id": "https://example.com/products/123",
//     "name": "Widget",
//     "offers": {
//         "@type": "Offer",
//         "price": "19.99",
//         "priceCurrency": "USD"
//     }
// }

echo $product->toJsonLdScriptTag();
// <script type="application/ld+json">...</script>
```

`json_encode($product)` also works and produces the same output, since
every type implements `JsonSerializable`. Properties left at their default
`null` are omitted automatically; nested Schema.org objects and arrays of
values are handled recursively.

Every type also inherits the rest of `Moonspot\ValueObjects\ValueObject`'s
API (`toArray()`, `fromArray()`, `toJson()`, `fromJson()`, `toYaml()`,
`fromYaml()`) -- see that project's docs for details.

## Regenerating from the Schema.org vocabulary

`resources/schemaorg-current-https.jsonld` is a checked-in snapshot of
https://schema.org/version/latest/schemaorg-current-https.jsonld. To pick up
a new Schema.org release, replace that file and run:

```
composer generate
```

This rewrites every file under `src/Type/`.

## Scope and design notes

This library covers **core Schema.org only**: the `pending` (proposed),
`attic` (superseded/retired), `health-lifesci`, `bib`, `auto`, and `meta`
layers are excluded, as is anything outside the `schema:` namespace that
rides along in the same vocabulary file (GS1, FIBO, etc.). That's 608
generated types as of the checked-in snapshot.

A few simplifications fall out of building on `Moonspot\ValueObjects`, which
assigns raw values onto plain typed properties with no casting hooks:

- **Cardinality.** Schema.org places no fixed cardinality on any property,
  so every property accepts either a single value or an array of values --
  every property type ends in `|array|null`. There's no dedicated
  single-vs-many variant.
- **Date/time/quantity properties are `string`, not objects.** `Date`,
  `DateTime`, `Time`, and the `Quantity` family (`Duration`, `Distance`,
  `Energy`, `Mass`) map to PHP `string` rather than `\DateTimeImmutable` or
  a value object, so that `fromArray()`/`fromJson()` can round-trip a
  decoded JSON-LD string straight onto the property without a custom caster.
  Format them as you would for JSON-LD (ISO 8601) yourself.
- **Enumeration members are string constants, not objects.** A class like
  `GenderType` or `ItemAvailability` is generated like any other type, but
  its known members are exposed as constants holding their IRI --
  `ItemAvailability::IN_STOCK === 'https://schema.org/InStock'` -- since
  that's how they're actually transmitted in JSON-LD. Properties that range
  over an enumeration are typed `string` for the same reason.
- **Single inheritance.** Schema.org's class graph is a DAG -- some types
  (e.g. `LocalBusiness`) have more than one superclass (`Organization` and
  `Place`). PHP classes can only `extends` one parent, so the generator
  picks the first-listed superclass for `extends` and flattens the other
  superclass(es)' own properties directly onto the class instead. This
  means `(new LocalBusiness())->openingHours` works fine, but
  `new LocalBusiness() instanceof Place` is `false` -- the inheritance
  relationship only holds along the primary (`extends`) chain.
- **`fromArray()`/`fromJson()` hydration of nested/polymorphic properties is
  limited.** Moonspot's `fromArray()` only recurses into a property when
  that property already holds an object instance; a property still at its
  default `null` just gets the raw decoded array assigned to it. In
  practice this means building up objects programmatically (as in the
  usage example above) works great, but parsing arbitrary third-party
  JSON-LD back into fully typed nested objects does not happen
  automatically -- assign a real instance to the property first if you need
  that property's own data hydrated.
- **Array element types aren't enforced.** A property typed
  `AggregateRating|array|null` accepts an array of `AggregateRating`
  objects, but PHP has no generics -- nothing actually checks that the
  array you assign only contains `AggregateRating` instances. Putting the
  wrong thing in one of these arrays mostly fails silently: array elements
  that are plain scalars (strings, numbers) serialize as-is with no error,
  producing JSON-LD that's syntactically fine but doesn't match the
  Schema.org spec for that property. Elements that are objects of the
  wrong class only get caught at serialization time (`toJsonLd*()`/
  `toArray()`), and only if that object doesn't implement `Export`/
  `JsonSerializable` at all. Each property's `@var` docblock documents the
  intended element type as `Type|Type[]|null` (e.g. `AggregateRating|
  AggregateRating[]|null`) so your IDE can hint it, but this is
  documentation only -- build these arrays by pushing correctly-typed
  objects, and don't rely on the library to catch a mistake here.
