<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

use DealNews\SchemaOrg\JsonLdNode;

/**
 * Thing.
 *
 * The most generic type of item.
 *
 * @see https://schema.org/Thing
 */
class Thing extends JsonLdNode {

    public const SCHEMA_TYPE = 'Thing';

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a relationship
     * between something and a class that the thing is in. Typically the value is a
     * URI-identified RDF class, and in this case corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org style guide (https://schema.org/docs/styleguide.html).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/additionalType
     */
    public string|array|null $additionalType = null;

    /**
     * An alias for the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/alternateName
     */
    public string|array|null $alternateName = null;

    /**
     * A description of the item.
     *
     * @var string|TextObject|string[]|TextObject[]|null
     *
     * @see https://schema.org/description
     */
    public string|TextObject|array|null $description = null;

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful for
     * disambiguation.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public string|array|null $disambiguatingDescription = null;

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @var PropertyValue|string|PropertyValue[]|string[]|null
     *
     * @see https://schema.org/identifier
     */
    public PropertyValue|string|array|null $identifier = null;

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @var ImageObject|string|ImageObject[]|string[]|null
     *
     * @see https://schema.org/image
     */
    public ImageObject|string|array|null $image = null;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public CreativeWork|string|array|null $mainEntityOfPage = null;

    /**
     * The name of the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/name
     */
    public string|array|null $name = null;

    /**
     * A person or organization who owns this Thing.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/owner
     */
    public Organization|Person|array|null $owner = null;

    /**
     * Indicates a potential Action, which describes an idealized action in which
     * this thing would play an 'object' role.
     *
     * @var Action|Action[]|null
     *
     * @see https://schema.org/potentialAction
     */
    public Action|array|null $potentialAction = null;

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/sameAs
     */
    public string|array|null $sameAs = null;

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @var CreativeWork|Event|CreativeWork[]|Event[]|null
     *
     * @see https://schema.org/subjectOf
     */
    public CreativeWork|Event|array|null $subjectOf = null;

    /**
     * URL of the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/url
     */
    public string|array|null $url = null;
}
