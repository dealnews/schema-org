# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

A PHP library of Schema.org value objects that emit JSON-LD. Every
Schema.org type (`Product`, `Person`, `LocalBusiness`, ...) is a generated
PHP class in `src/Type/`, built on top of `moonspot/value-objects`'
`ValueObject` base class. `src/Type/*.php` (608 files) is **generated
code** — never hand-edit it; edit `bin/generate.php` and regenerate.

## Commands

```
composer install       # install moonspot/value-objects + phpunit
composer generate       # regenerate src/Type/*.php from resources/schemaorg-current-https.jsonld
composer test           # run the test suite (vendor/bin/phpunit)
vendor/bin/phpunit --filter testName   # run a single test
php -l src/Type/Product.php            # syntax-check one generated file
```

To pick up a new Schema.org release: replace
`resources/schemaorg-current-https.jsonld` with a fresh download of
https://schema.org/version/latest/schemaorg-current-https.jsonld, then run
`composer generate`.

## Architecture

### Two layers

1. **`src/JsonLdNode.php`** (hand-written) — the abstract base every
   generated type extends. It layers JSON-LD shaping on top of
   `Moonspot\ValueObjects\ValueObject`:
   - `?string $id` maps to JSON-LD `@id`.
   - `toArray()` injects `@type` (from each class's `SCHEMA_TYPE` const)
     and drops any property still at its `null`/`''`/`[]` default.
   - `@context` is added in exactly one place: `jsonSerialize()` /
     `toJsonLd()`. Nested objects are always exported via `toArray()`
     (never `jsonSerialize()`), so `@context` only ever appears once, at
     the root of a serialized graph — there's no "am I the root?" flag
     needed, it falls out of which method gets called.
   - `toJsonLdScriptTag()` uses `JSON_HEX_TAG|JSON_HEX_AMP` so untrusted
     property values can't break out of the `<script>` tag.

2. **`src/Type/*.php`** (generated) — one class per core Schema.org type,
   each extending its primary parent (ultimately `Thing extends
   JsonLdNode`).

### The generator (`bin/generate.php`)

Reads `resources/schemaorg-current-https.jsonld` (the official vocabulary,
`@graph` of RDF-ish nodes) and:

- **Scopes to core only**: excludes anything not in the `schema:`
  namespace (GS1/FIBO/etc. terms ride along in the same file) and
  anything tagged `schema:isPartOf` a `pending`/`health-lifesci`/`bib`/
  `auto`/`meta` layer, or `schema:supersededBy` (attic/retired terms).
  ~622 core classes / ~870 core properties survive this filter.
- **DataType classes** (`Text`, `URL`, `Number`, `Integer`, `Date`,
  `Quantity`, `Duration`, ...) are *not* generated as PHP classes — they
  map straight to PHP scalars (`data_type_scalar()`): `Boolean`→`bool`,
  `Integer`→`int`, `Float`/`Number`→`int|float`, everything else
  (`Text`-family, `Date`/`DateTime`/`Time`, `Quantity`-family) → `string`.
  This is deliberate: `ValueObject::fromArray()` assigns raw scalars
  straight onto typed properties with no casting hook, so a
  `\DateTimeImmutable`-typed property could never round-trip a decoded
  JSON string.
- **Enumeration classes** (`GenderType`, `ItemAvailability`, ...) *are*
  generated as normal classes, but their known individuals become string
  constants holding the member's IRI (`ItemAvailability::IN_STOCK ===
  'https://schema.org/InStock'`), via `to_const_name()`
  (PascalCase→SCREAMING_SNAKE_CASE). Properties that range over an
  enumeration are typed `string`, since that's how the value is actually
  transmitted in JSON-LD.
- **Multi-parent flattening**: Schema.org's class graph is a DAG, not a
  tree — some types (e.g. `LocalBusiness` is both `Organization` and
  `Place`) have more than one `rdfs:subClassOf`. PHP only supports single
  inheritance, so `primary_parent()` picks the first-listed parent for
  `extends`, and the property-gathering step in `render_class()` computes
  a **delta**: the full transitive property set reachable from the class
  (via `ancestors()`, which walks *all* listed parents) minus whatever is
  already reachable from the primary parent alone. Only that delta gets
  declared directly on the class; everything else comes through normal
  PHP inheritance. This keeps generated files small (a naive
  "redeclare everything" approach was tried first and produced
  1000+-line files for deep hierarchies like `Restaurant`) but means
  `instanceof` only reflects the primary chain —
  `new LocalBusiness() instanceof Place` is `false` even though
  Schema.org itself says LocalBusiness is a kind of Place.
- **Property types** are PHP union types built from `rangeIncludes`,
  always with `|array|null` appended (Schema.org places no cardinality
  limit on any property, and there's no dedicated single-vs-many
  property variant). Same-namespace class references need no `use`
  import since every generated class lives in `DealNews\SchemaOrg\Type`.
- Every generated class carries a `public const SCHEMA_TYPE` (equal to
  its own name for all core types — no generated class's PHP name
  diverges from its Schema.org name, since the one core type with a
  non-identifier name, `3DModel`, is `pending`-only and gets filtered
  out).

### Known limitation: `fromArray()`/`fromJson()` hydration

`Moonspot\ValueObjects\ValueObject::fromArray()` only recurses into a
property when that property *already holds an object instance* — a
property still at its default `null` just gets the raw decoded array
assigned to it verbatim. Building objects up programmatically (set
`$product->offers = new Offer(); ...`) works great and is the primary
supported path; parsing arbitrary third-party JSON-LD back into fully
typed nested objects does not happen automatically.

### Known limitation: array element types aren't enforced

Every property type ends in `|array|null` (see above), but PHP has no
generics -- the declared type can only require *that* the value is an
`array`, not that its elements are all (say) `AggregateRating`. Nothing
stops `$offer->aggregateRating = ['whatever', 'you', 'want'];` from
type-checking. The failure mode is also mostly silent:
`Moonspot\ValueObjects\ValueObject::toArray()` (which every `toJsonLd*()`
call goes through) only inspects array elements that are themselves
objects, throwing `\LogicException` if one doesn't implement `Export`/
`JsonSerializable` -- a scalar in the wrong slot just serializes as-is,
producing syntactically valid but spec-invalid JSON-LD with no error at
all.

This was evaluated and deliberately not fixed with a runtime-enforced
collection type (e.g. wrapping each array-eligible property in a
`Moonspot\ValueObjects\TypedArray` subclass): doing that properly would
need ~135 new generated "Set" classes (one per distinct class that appears
as a `rangeIncludes` target across the vocabulary), would require
default-constructing those Set instances in every affected class'
constructor for `fromArray()`/`fromJson()` hydration to keep working (see
above), and would remove the ability to just assign a plain PHP array
literal -- all to guard against a mistake that the primary supported
workflow (building arrays by pushing already-correctly-typed objects) is
unlikely to make. The generator instead documents the intended element
type via the `@var Type|Type[]|null` PHPDoc hint (`property_phpdoc_type()`
in `bin/generate.php`) rather than the bare `@var Type|array|null` that
mirroring the real declared type would produce -- IDEs get an accurate
hint, but nothing enforces it. Revisit if this actually produces bad
JSON-LD in practice.

### Style deviation from house PHP conventions

Generated property names stay in Schema.org's native camelCase
(`priceCurrency`, not `price_currency`), diverging from the usual
DealNews snake_case property convention. This is required, not a
preference: `Moonspot\ValueObjects` casts objects to arrays using the
property name verbatim as the output key, so snake_case properties would
produce JSON-LD that no longer matches the Schema.org spec. Hand-written
code (`bin/generate.php`, `src/JsonLdNode.php`, tests) still uses
snake_case locals per house style.
