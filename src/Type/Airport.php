<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Airport.
 *
 * An airport.
 *
 * @see https://schema.org/Airport
 */
class Airport extends CivicStructure {

    public const SCHEMA_TYPE = 'Airport';

    /**
     * IATA identifier for an airline or airport.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/iataCode
     */
    public string|array|null $iataCode = null;

    /**
     * ICAO identifier for an airport.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/icaoCode
     */
    public string|array|null $icaoCode = null;
}
