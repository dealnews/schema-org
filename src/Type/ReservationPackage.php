<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReservationPackage.
 *
 * A group of multiple reservations with common values for all
 * sub-reservations.
 *
 * @see https://schema.org/ReservationPackage
 */
class ReservationPackage extends Reservation {

    public const SCHEMA_TYPE = 'ReservationPackage';

    /**
     * The individual reservations included in the package. Typically a repeated
     * property.
     *
     * @var Reservation|Reservation[]|null
     *
     * @see https://schema.org/subReservation
     */
    public Reservation|array|null $subReservation = null;
}
