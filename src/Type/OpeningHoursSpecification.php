<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OpeningHoursSpecification.
 *
 * A structured value providing information about the opening hours of a place
 * or a certain service inside a place.
 *
 *
 * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 *
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
 *
 * @see https://schema.org/OpeningHoursSpecification
 */
class OpeningHoursSpecification extends StructuredValue {

    public const SCHEMA_TYPE = 'OpeningHoursSpecification';

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @var string|array|null
     *
     * @see https://schema.org/closes
     */
    public string|array|null $closes = null;

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dayOfWeek
     */
    public string|array|null $dayOfWeek = null;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @var string|array|null
     *
     * @see https://schema.org/opens
     */
    public string|array|null $opens = null;

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
