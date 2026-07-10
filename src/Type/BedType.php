<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BedType.
 *
 * A type of bed. This is used for indicating the bed or beds available in an
 * accommodation.
 *
 * @see https://schema.org/BedType
 */
class BedType extends QualitativeValue {

    public const SCHEMA_TYPE = 'BedType';
}
