<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LocationFeatureSpecification.
 *
 * Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
 *
 * @see https://schema.org/LocationFeatureSpecification
 */
class LocationFeatureSpecification extends PropertyValue {

    public const SCHEMA_TYPE = 'LocationFeatureSpecification';

    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification|array|null
     *
     * @see https://schema.org/hoursAvailable
     */
    public OpeningHoursSpecification|array|null $hoursAvailable = null;

    /**
     * The date when the item becomes valid.
     *
     * @var string|array|null
     *
     * @see https://schema.org/validFrom
     */
    public string|array|null $validFrom = null;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string|array|null
     *
     * @see https://schema.org/validThrough
     */
    public string|array|null $validThrough = null;
}
