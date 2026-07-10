<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TrainTrip.
 *
 * A trip on a commercial train line.
 *
 * @see https://schema.org/TrainTrip
 */
class TrainTrip extends Trip {

    public const SCHEMA_TYPE = 'TrainTrip';

    /**
     * The platform where the train arrives.
     *
     * @var string|array|null
     *
     * @see https://schema.org/arrivalPlatform
     */
    public string|array|null $arrivalPlatform = null;

    /**
     * The station where the train trip ends.
     *
     * @var TrainStation|array|null
     *
     * @see https://schema.org/arrivalStation
     */
    public TrainStation|array|null $arrivalStation = null;

    /**
     * The platform from which the train departs.
     *
     * @var string|array|null
     *
     * @see https://schema.org/departurePlatform
     */
    public string|array|null $departurePlatform = null;

    /**
     * The station from which the train departs.
     *
     * @var TrainStation|array|null
     *
     * @see https://schema.org/departureStation
     */
    public TrainStation|array|null $departureStation = null;

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @var string|array|null
     *
     * @see https://schema.org/trainName
     */
    public string|array|null $trainName = null;

    /**
     * The unique identifier for the train.
     *
     * @var string|array|null
     *
     * @see https://schema.org/trainNumber
     */
    public string|array|null $trainNumber = null;
}
