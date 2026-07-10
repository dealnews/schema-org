<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Map.
 *
 * A map.
 *
 * @see https://schema.org/Map
 */
class Map extends CreativeWork {

    public const SCHEMA_TYPE = 'Map';

    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     * @var string|array|null
     *
     * @see https://schema.org/mapType
     */
    public string|array|null $mapType = null;
}
