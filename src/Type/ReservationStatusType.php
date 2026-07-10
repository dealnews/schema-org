<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReservationStatusType.
 *
 * Enumerated status values for Reservation.
 *
 * @see https://schema.org/ReservationStatusType
 */
class ReservationStatusType extends StatusEnumeration {

    public const SCHEMA_TYPE = 'ReservationStatusType';

    public const RESERVATION_CANCELLED = 'https://schema.org/ReservationCancelled';
    public const RESERVATION_CONFIRMED = 'https://schema.org/ReservationConfirmed';
    public const RESERVATION_HOLD = 'https://schema.org/ReservationHold';
    public const RESERVATION_PENDING = 'https://schema.org/ReservationPending';
}
