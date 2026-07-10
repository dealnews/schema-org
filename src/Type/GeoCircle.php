<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GeoCircle.
 *
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is
 * a GeoShape
 *           it provides the simple textual property 'circle', but also allows
 * the combination of postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
 *
 * @see https://schema.org/GeoCircle
 */
class GeoCircle extends GeoShape {

    public const SCHEMA_TYPE = 'GeoCircle';

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     *
     * @var GeoCoordinates|array|null
     *
     * @see https://schema.org/geoMidpoint
     */
    public GeoCoordinates|array|null $geoMidpoint = null;

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     *
     * @var string|int|float|array|null
     *
     * @see https://schema.org/geoRadius
     */
    public string|int|float|array|null $geoRadius = null;
}
