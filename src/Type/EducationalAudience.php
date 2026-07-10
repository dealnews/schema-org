<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EducationalAudience.
 *
 * An EducationalAudience.
 *
 * @see https://schema.org/EducationalAudience
 */
class EducationalAudience extends Audience {

    public const SCHEMA_TYPE = 'EducationalAudience';

    /**
     * An educationalRole of an EducationalAudience.
     *
     * @var string|array|null
     *
     * @see https://schema.org/educationalRole
     */
    public string|array|null $educationalRole = null;
}
