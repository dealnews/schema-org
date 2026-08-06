<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * FlightReservation.
 *
 * A reservation for air travel.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see https://schema.org/FlightReservation
 */
class FlightReservation extends Reservation {

    public const SCHEMA_TYPE = 'FlightReservation';

    /**
     * The airline-specific indicator of boarding order / preference.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/boardingGroup
     */
    public string|array|null $boardingGroup = null;

    /**
     * The priority status assigned to a passenger for security or boarding (e.g.
     * FastTrack or Priority).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/passengerPriorityStatus
     */
    public string|array|null $passengerPriorityStatus = null;

    /**
     * The passenger's sequence number as assigned by the airline.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/passengerSequenceNumber
     */
    public string|array|null $passengerSequenceNumber = null;

    /**
     * The type of security screening the passenger is subject to.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/securityScreening
     */
    public string|array|null $securityScreening = null;
}
