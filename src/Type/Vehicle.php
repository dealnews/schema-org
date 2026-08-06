<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Vehicle.
 *
 * A vehicle is a device that is designed or used to transport people or cargo
 * over land, water, air, or through space.
 *
 * @see https://schema.org/Vehicle
 */
class Vehicle extends Product {

    public const SCHEMA_TYPE = 'Vehicle';

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually
     * the trunk volume.
     *
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     *
     * Note: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/cargoVolume
     */
    public QuantitativeValue|array|null $cargoVolume = null;

    /**
     * The date of the first registration of the vehicle with the respective public
     * authorities.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateVehicleFirstRegistered
     */
    public string|array|null $dateVehicleFirstRegistered = null;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque
     * from the vehicle's engine via the drivetrain.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/driveWheelConfiguration
     */
    public string|array|null $driveWheelConfiguration = null;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal
     * duration with the given vehicle (e.g. liters per 100 km).
     *
     * * Note 1: There are unfortunately no standard unit codes for liters per 100
     * km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100 km.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g.
     * 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to driving
     * speed ("at 80 km/h") or usage pattern ("city traffic"). You can use
     * [[valueReference]] to link the value for the fuel consumption to another
     * value.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/fuelConsumption
     */
    public QuantitativeValue|array|null $fuelConsumption = null;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon
     * (mpg) or kilometers per liter (km/L).
     *
     * * Note 1: There are unfortunately no standard unit codes for miles per
     * gallon or kilometers per liter. Use [[unitText]] to indicate the unit of
     * measurement, e.g. mpg or km/L.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g.
     * 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to driving
     * speed ("at 80 km/h") or usage pattern ("city traffic"). You can use
     * [[valueReference]] to link the value for the fuel economy to another value.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/fuelEfficiency
     */
    public QuantitativeValue|array|null $fuelEfficiency = null;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/fuelType
     */
    public string|array|null $fuelType = null;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/knownVehicleDamages
     */
    public string|array|null $knownVehicleDamages = null;

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     *
     * Typical unit code(s): KMT for kilometers, SMI for statute miles.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/mileageFromOdometer
     */
    public QuantitativeValue|array|null $mileageFromOdometer = null;

    /**
     * The number or type of airbags in the vehicle.
     *
     * @var int|float|string|int[]|float[]|string[]|null
     *
     * @see https://schema.org/numberOfAirbags
     */
    public int|float|string|array|null $numberOfAirbags = null;

    /**
     * The number of axles.
     *
     * Typical unit code(s): C62.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/numberOfAxles
     */
    public int|float|QuantitativeValue|array|null $numberOfAxles = null;

    /**
     * The number of doors.
     *
     * Typical unit code(s): C62.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/numberOfDoors
     */
    public int|float|QuantitativeValue|array|null $numberOfDoors = null;

    /**
     * The total number of forward gears available for the transmission system of
     * the vehicle.
     *
     * Typical unit code(s): C62.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/numberOfForwardGears
     */
    public int|float|QuantitativeValue|array|null $numberOfForwardGears = null;

    /**
     * The number of owners of the vehicle, including the current one.
     *
     * Typical unit code(s): C62.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/numberOfPreviousOwners
     */
    public int|float|QuantitativeValue|array|null $numberOfPreviousOwners = null;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/steeringPosition
     */
    public string|array|null $steeringPosition = null;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr
     * hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleConfiguration
     */
    public string|array|null $vehicleConfiguration = null;

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @var EngineSpecification|EngineSpecification[]|null
     *
     * @see https://schema.org/vehicleEngine
     */
    public EngineSpecification|array|null $vehicleEngine = null;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by
     * the automotive industry to identify individual motor vehicles.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleIdentificationNumber
     */
    public string|array|null $vehicleIdentificationNumber = null;

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleInteriorColor
     */
    public string|array|null $vehicleInteriorColor = null;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric,
     * leather, wood, etc.). While most interior types are characterized by the
     * material used, an interior type can also be based on vehicle usage or target
     * audience.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleInteriorType
     */
    public string|array|null $vehicleInteriorType = null;

    /**
     * The release date of a vehicle model (often used to differentiate versions of
     * the same make and model).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleModelDate
     */
    public string|array|null $vehicleModelDate = null;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of
     * the physical space available, and in terms of limitations set by law.
     *
     * Typical unit code(s): C62 for persons.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/vehicleSeatingCapacity
     */
    public int|float|QuantitativeValue|array|null $vehicleSeatingCapacity = null;

    /**
     * The type of component used for transmitting the power from a rotating power
     * source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vehicleTransmission
     */
    public string|array|null $vehicleTransmission = null;
}
