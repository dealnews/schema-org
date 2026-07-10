<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HotelRoom.
 *
 * A hotel room is a single room in a hotel.
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see https://schema.org/HotelRoom
 */
class HotelRoom extends Room {

    public const SCHEMA_TYPE = 'HotelRoom';
}
