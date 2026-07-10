<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LodgingReservation.
 *
 * A reservation for lodging at a hotel, motel, inn, etc.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see https://schema.org/LodgingReservation
 */
class LodgingReservation extends Reservation {

    public const SCHEMA_TYPE = 'LodgingReservation';

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @var string|array|null
     *
     * @see https://schema.org/checkinTime
     */
    public string|array|null $checkinTime = null;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @var string|array|null
     *
     * @see https://schema.org/checkoutTime
     */
    public string|array|null $checkoutTime = null;

    /**
     * A full description of the lodging unit.
     *
     * @var string|array|null
     *
     * @see https://schema.org/lodgingUnitDescription
     */
    public string|array|null $lodgingUnitDescription = null;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed,
     * etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/lodgingUnitType
     */
    public string|array|null $lodgingUnitType = null;

    /**
     * The number of adults staying in the unit.
     *
     * @var int|QuantitativeValue|array|null
     *
     * @see https://schema.org/numAdults
     */
    public int|QuantitativeValue|array|null $numAdults = null;

    /**
     * The number of children staying in the unit.
     *
     * @var int|QuantitativeValue|array|null
     *
     * @see https://schema.org/numChildren
     */
    public int|QuantitativeValue|array|null $numChildren = null;
}
