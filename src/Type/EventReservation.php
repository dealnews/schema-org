<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EventReservation.
 *
 * A reservation for an event like a concert, sporting event, or lecture.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see https://schema.org/EventReservation
 */
class EventReservation extends Reservation {

    public const SCHEMA_TYPE = 'EventReservation';
}
