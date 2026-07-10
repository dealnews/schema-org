<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BusTrip.
 *
 * A trip on a commercial bus line.
 *
 * @see https://schema.org/BusTrip
 */
class BusTrip extends Trip {

    public const SCHEMA_TYPE = 'BusTrip';

    /**
     * The stop or station from which the bus arrives.
     *
     * @var BusStation|BusStop|array|null
     *
     * @see https://schema.org/arrivalBusStop
     */
    public BusStation|BusStop|array|null $arrivalBusStop = null;

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @var string|array|null
     *
     * @see https://schema.org/busName
     */
    public string|array|null $busName = null;

    /**
     * The unique identifier for the bus.
     *
     * @var string|array|null
     *
     * @see https://schema.org/busNumber
     */
    public string|array|null $busNumber = null;

    /**
     * The stop or station from which the bus departs.
     *
     * @var BusStation|BusStop|array|null
     *
     * @see https://schema.org/departureBusStop
     */
    public BusStation|BusStop|array|null $departureBusStop = null;
}
