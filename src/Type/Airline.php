<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Airline.
 *
 * An organization that provides flights for passengers.
 *
 * @see https://schema.org/Airline
 */
class Airline extends Organization {

    public const SCHEMA_TYPE = 'Airline';

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/boardingPolicy
     */
    public string|array|null $boardingPolicy = null;

    /**
     * IATA identifier for an airline or airport.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/iataCode
     */
    public string|array|null $iataCode = null;
}
