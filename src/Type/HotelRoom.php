<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HotelRoom.
 *
 * A hotel room is a single room in a hotel.
 *
 * See also the dedicated document on the use of schema.org for marking up
 * hotels and other forms of accommodations (/docs/hotels.html).
 *
 * @see https://schema.org/HotelRoom
 */
class HotelRoom extends Room {

    public const SCHEMA_TYPE = 'HotelRoom';
}
