<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EngineSpecification.
 *
 * Information about the engine of the vehicle. A vehicle can have multiple
 * engines represented by multiple engine specification entities.
 *
 * @see https://schema.org/EngineSpecification
 */
class EngineSpecification extends StructuredValue {

    public const SCHEMA_TYPE = 'EngineSpecification';

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @var string|array|null
     *
     * @see https://schema.org/fuelType
     */
    public string|array|null $fuelType = null;
}
