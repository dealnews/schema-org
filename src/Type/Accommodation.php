<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Accommodation.
 *
 * An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for
 * overnight stays, but this is not a mandatory requirement.
 * For more specific types of accommodations not defined in schema.org, one can
 * use [[additionalType]] with external vocabularies.
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see https://schema.org/Accommodation
 */
class Accommodation extends Place {

    public const SCHEMA_TYPE = 'Accommodation';

    /**
     * The type of bed or beds included in the accommodation. For the single case
     * of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use an
     * instance of BedDetails. For more detailed information, use the
     * amenityFeature property.
     *
     * @var BedDetails|string|array|null
     *
     * @see https://schema.org/bed
     */
    public BedDetails|string|array|null $bed = null;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
     * square yard.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/floorSize
     */
    public QuantitativeValue|array|null $floorSize = null;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation
     * or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
     * be put in the unitText property of the QuantitativeValue.
     *
     * @var int|float|QuantitativeValue|array|null
     *
     * @see https://schema.org/numberOfRooms
     */
    public int|float|QuantitativeValue|array|null $numberOfRooms = null;

    /**
     * The allowed total occupancy for the accommodation in persons (including
     * infants etc). For individual accommodations, this is not necessarily the
     * legal maximum but defines the permitted usage as per the contractual
     * agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/occupancy
     */
    public QuantitativeValue|array|null $occupancy = null;

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/permittedUsage
     */
    public string|array|null $permittedUsage = null;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var bool|string|array|null
     *
     * @see https://schema.org/petsAllowed
     */
    public bool|string|array|null $petsAllowed = null;
}
