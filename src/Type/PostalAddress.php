<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PostalAddress.
 *
 * The mailing address.
 *
 * @see https://schema.org/PostalAddress
 */
class PostalAddress extends ContactPoint {

    public const SCHEMA_TYPE = 'PostalAddress';

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1
     * alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US".
     * For backward compatibility, a 3-letter [ISO 3166-1
     * alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such
     * as "SGP" or a full country name such as "Singapore" can also be used.
     *
     * @var Country|string|Country[]|string[]|null
     *
     * @see https://schema.org/addressCountry
     */
    public Country|string|array|null $addressCountry = null;

    /**
     * The locality in which the street address is, and which is in the region. For
     * example, Mountain View.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/addressLocality
     */
    public string|array|null $addressLocality = null;

    /**
     * The region in which the locality is, and which is in the country. For
     * example, California or another appropriate first-level [Administrative
     * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country)
     * such as the Province in Italy or Region in Germany.
     *
     * @var AdministrativeArea|string|AdministrativeArea[]|string[]|null
     *
     * @see https://schema.org/addressRegion
     */
    public AdministrativeArea|string|array|null $addressRegion = null;

    /**
     * An address extension such as an apartment number, C/O or alternative name.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/extendedAddress
     */
    public string|array|null $extendedAddress = null;

    /**
     * The post office box number for PO box addresses.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/postOfficeBoxNumber
     */
    public string|array|null $postOfficeBoxNumber = null;

    /**
     * The postal code. For example, 94043.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/postalCode
     */
    public string|array|null $postalCode = null;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/streetAddress
     */
    public string|array|null $streetAddress = null;
}
