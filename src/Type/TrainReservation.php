<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TrainReservation.
 *
 * A reservation for train travel.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see https://schema.org/TrainReservation
 */
class TrainReservation extends Reservation {

    public const SCHEMA_TYPE = 'TrainReservation';
}
