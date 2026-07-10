<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GenderType.
 *
 * An enumeration of genders.
 *
 * @see https://schema.org/GenderType
 */
class GenderType extends Enumeration {

    public const SCHEMA_TYPE = 'GenderType';

    public const FEMALE = 'https://schema.org/Female';
    public const MALE = 'https://schema.org/Male';
}
