<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * FoodEstablishmentReservation.
 *
 * A reservation to dine at a food-related business.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see https://schema.org/FoodEstablishmentReservation
 */
class FoodEstablishmentReservation extends Reservation {

    public const SCHEMA_TYPE = 'FoodEstablishmentReservation';

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from January to *December*. For media, including audio and
     * video, it's the time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/endTime
     */
    public string|array|null $endTime = null;

    /**
     * Number of people the reservation should accommodate.
     *
     * @var int|QuantitativeValue|int[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/partySize
     */
    public int|QuantitativeValue|array|null $partySize = null;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and
     * video, it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/startTime
     */
    public string|array|null $startTime = null;
}
