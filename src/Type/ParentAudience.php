<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ParentAudience.
 *
 * A set of characteristics describing parents, who can be interested in
 * viewing some content.
 *
 * @see https://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience {

    public const SCHEMA_TYPE = 'ParentAudience';

    /**
     * Maximal age of the child.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/childMaxAge
     */
    public int|float|array|null $childMaxAge = null;

    /**
     * Minimal age of the child.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/childMinAge
     */
    public int|float|array|null $childMinAge = null;
}
