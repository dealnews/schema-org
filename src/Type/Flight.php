<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Flight.
 *
 * An airline flight.
 *
 * @see https://schema.org/Flight
 */
class Flight extends Trip {

    public const SCHEMA_TYPE = 'Flight';

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @var string|Vehicle|string[]|Vehicle[]|null
     *
     * @see https://schema.org/aircraft
     */
    public string|Vehicle|array|null $aircraft = null;

    /**
     * The airport where the flight terminates.
     *
     * @var Airport|Airport[]|null
     *
     * @see https://schema.org/arrivalAirport
     */
    public Airport|array|null $arrivalAirport = null;

    /**
     * Identifier of the flight's arrival gate.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/arrivalGate
     */
    public string|array|null $arrivalGate = null;

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/arrivalTerminal
     */
    public string|array|null $arrivalTerminal = null;

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
     * The airport where the flight originates.
     *
     * @var Airport|Airport[]|null
     *
     * @see https://schema.org/departureAirport
     */
    public Airport|array|null $departureAirport = null;

    /**
     * Identifier of the flight's departure gate.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/departureGate
     */
    public string|array|null $departureGate = null;

    /**
     * Identifier of the flight's departure terminal.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/departureTerminal
     */
    public string|array|null $departureTerminal = null;

    /**
     * The estimated time the flight will take.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/estimatedFlightDuration
     */
    public string|array|null $estimatedFlightDuration = null;

    /**
     * The distance of the flight.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/flightDistance
     */
    public string|array|null $flightDistance = null;

    /**
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United is
     * 'UA', the flightNumber is 'UA110'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/flightNumber
     */
    public string|array|null $flightNumber = null;

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/mealService
     */
    public string|array|null $mealService = null;

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/seller
     */
    public Organization|Person|array|null $seller = null;

    /**
     * The time when a passenger can check into the flight online.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/webCheckinTime
     */
    public string|array|null $webCheckinTime = null;
}
