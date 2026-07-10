<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GeoShape.
 *
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either
 * whitespace or commas can be used to separate latitude and longitude;
 * whitespace should be used when writing a list of several such points.
 *
 * @see https://schema.org/GeoShape
 */
class GeoShape extends StructuredValue {

    public const SCHEMA_TYPE = 'GeoShape';

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
     * A box is the area enclosed by the rectangle formed by two points. The first
     * point is the lower corner, the second point is the upper corner. A box is
     * expressed as two points separated by a space character.
     *
     * @var string|array|null
     *
     * @see https://schema.org/box
     */
    public string|array|null $box = null;

    /**
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair followed
     * by a radius in meters.
     *
     * @var string|array|null
     *
     * @see https://schema.org/circle
     */
    public string|array|null $circle = null;

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
     * A line is a point-to-point path consisting of two or more points. A line is
     * expressed as a series of two or more point objects separated by space.
     *
     * @var string|array|null
     *
     * @see https://schema.org/line
     */
    public string|array|null $line = null;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a series
     * of four or more space delimited points where the first and final points are
     * identical.
     *
     * @var string|array|null
     *
     * @see https://schema.org/polygon
     */
    public string|array|null $polygon = null;

    /**
     * The postal code. For example, 94043.
     *
     * @var string|array|null
     *
     * @see https://schema.org/postalCode
     */
    public string|array|null $postalCode = null;
}
