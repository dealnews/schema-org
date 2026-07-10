<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GeoCoordinates.
 *
 * The geographic coordinates of a place or event.
 *
 * @see https://schema.org/GeoCoordinates
 */
class GeoCoordinates extends StructuredValue {

    public const SCHEMA_TYPE = 'GeoCoordinates';

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string|array|null
     *
     * @see https://schema.org/address
     */
    public PostalAddress|string|array|null $address = null;

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1
     * alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US".
     * For backward compatibility, a 3-letter [ISO 3166-1
     * alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such
     * as "SGP" or a full country name such as "Singapore" can also be used.
     *
     * @var Country|string|array|null
     *
     * @see https://schema.org/addressCountry
     */
    public Country|string|array|null $addressCountry = null;

    /**
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of
     * the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
     * numbers alone should be assumed to be a value in meters.
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/elevation
     */
    public int|float|string|array|null $elevation = null;

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/latitude
     */
    public int|float|string|array|null $latitude = null;

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/longitude
     */
    public int|float|string|array|null $longitude = null;

    /**
     * The postal code. For example, 94043.
     *
     * @var string|array|null
     *
     * @see https://schema.org/postalCode
     */
    public string|array|null $postalCode = null;
}
