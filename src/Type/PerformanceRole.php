<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PerformanceRole.
 *
 * A PerformanceRole is a Role that some entity places with regard to a
 * theatrical performance, e.g. in a Movie, TVSeries etc.
 *
 * @see https://schema.org/PerformanceRole
 */
class PerformanceRole extends Role {

    public const SCHEMA_TYPE = 'PerformanceRole';

    /**
     * The name of a character played in some acting or performing role, i.e. in a
     * PerformanceRole.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/characterName
     */
    public string|array|null $characterName = null;
}
