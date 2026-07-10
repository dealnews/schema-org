<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SteeringPositionValue.
 *
 * A value indicating a steering position.
 *
 * @see https://schema.org/SteeringPositionValue
 */
class SteeringPositionValue extends QualitativeValue {

    public const SCHEMA_TYPE = 'SteeringPositionValue';

    public const LEFT_HAND_DRIVING = 'https://schema.org/LeftHandDriving';
    public const RIGHT_HAND_DRIVING = 'https://schema.org/RightHandDriving';
}
