<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DriveWheelConfigurationValue.
 *
 * A value indicating which roadwheels will receive torque.
 *
 * @see https://schema.org/DriveWheelConfigurationValue
 */
class DriveWheelConfigurationValue extends QualitativeValue {

    public const SCHEMA_TYPE = 'DriveWheelConfigurationValue';

    public const ALL_WHEEL_DRIVE_CONFIGURATION = 'https://schema.org/AllWheelDriveConfiguration';
    public const FOUR_WHEEL_DRIVE_CONFIGURATION = 'https://schema.org/FourWheelDriveConfiguration';
    public const FRONT_WHEEL_DRIVE_CONFIGURATION = 'https://schema.org/FrontWheelDriveConfiguration';
    public const REAR_WHEEL_DRIVE_CONFIGURATION = 'https://schema.org/RearWheelDriveConfiguration';
}
