<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MapCategoryType.
 *
 * An enumeration of several kinds of Map.
 *
 * @see https://schema.org/MapCategoryType
 */
class MapCategoryType extends Enumeration {

    public const SCHEMA_TYPE = 'MapCategoryType';

    public const PARKING_MAP = 'https://schema.org/ParkingMap';
    public const SEATING_MAP = 'https://schema.org/SeatingMap';
    public const TRANSIT_MAP = 'https://schema.org/TransitMap';
    public const VENUE_MAP = 'https://schema.org/VenueMap';
}
