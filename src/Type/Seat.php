<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Seat.
 *
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @see https://schema.org/Seat
 */
class Seat extends Intangible {

    public const SCHEMA_TYPE = 'Seat';

    /**
     * The location of the reserved seat (e.g., 27).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/seatNumber
     */
    public string|array|null $seatNumber = null;

    /**
     * The row location of the reserved seat (e.g., B).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/seatRow
     */
    public string|array|null $seatRow = null;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/seatSection
     */
    public string|array|null $seatSection = null;

    /**
     * The type/class of the seat.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/seatingType
     */
    public string|array|null $seatingType = null;
}
