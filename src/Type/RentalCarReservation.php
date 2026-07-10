<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RentalCarReservation.
 *
 * A reservation for a rental car.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see https://schema.org/RentalCarReservation
 */
class RentalCarReservation extends Reservation {

    public const SCHEMA_TYPE = 'RentalCarReservation';

    /**
     * Where a rental car can be dropped off.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/dropoffLocation
     */
    public Place|array|null $dropoffLocation = null;

    /**
     * When a rental car can be dropped off.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dropoffTime
     */
    public string|array|null $dropoffTime = null;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/pickupLocation
     */
    public Place|array|null $pickupLocation = null;

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @var string|array|null
     *
     * @see https://schema.org/pickupTime
     */
    public string|array|null $pickupTime = null;
}
