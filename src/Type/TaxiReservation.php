<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TaxiReservation.
 *
 * A reservation for a taxi.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see https://schema.org/TaxiReservation
 */
class TaxiReservation extends Reservation {

    public const SCHEMA_TYPE = 'TaxiReservation';

    /**
     * Number of people the reservation should accommodate.
     *
     * @var int|QuantitativeValue|int[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/partySize
     */
    public int|QuantitativeValue|array|null $partySize = null;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/pickupLocation
     */
    public Place|array|null $pickupLocation = null;

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/pickupTime
     */
    public string|array|null $pickupTime = null;
}
