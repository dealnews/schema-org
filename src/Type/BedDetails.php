<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BedDetails.
 *
 * An entity holding detailed information about the available bed types, e.g.
 * the quantity of twin beds for a hotel room. For the single case of just one
 * bed of a certain type, you can use bed directly with a text. See also
 * [[BedType]] (under development).
 *
 * @see https://schema.org/BedDetails
 */
class BedDetails extends Intangible {

    public const SCHEMA_TYPE = 'BedDetails';

    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House,
     * or Apartment.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/numberOfBeds
     */
    public int|float|array|null $numberOfBeds = null;

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed
     * available in the quantity indicated by quantity.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/typeOfBed
     */
    public string|array|null $typeOfBed = null;
}
