<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PeopleAudience.
 *
 * A set of characteristics belonging to people, e.g. who compose an item's
 * target audience.
 *
 * @see https://schema.org/PeopleAudience
 */
class PeopleAudience extends Audience {

    public const SCHEMA_TYPE = 'PeopleAudience';

    /**
     * Audiences defined by a person's gender.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/requiredGender
     */
    public string|array|null $requiredGender = null;

    /**
     * Audiences defined by a person's maximum age.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/requiredMaxAge
     */
    public int|array|null $requiredMaxAge = null;

    /**
     * Audiences defined by a person's minimum age.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/requiredMinAge
     */
    public int|array|null $requiredMinAge = null;

    /**
     * The suggested gender of the intended person or audience, for example "male",
     * "female", or "unisex".
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/suggestedGender
     */
    public string|array|null $suggestedGender = null;

    /**
     * Maximum recommended age in years for the audience or user.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/suggestedMaxAge
     */
    public int|float|array|null $suggestedMaxAge = null;

    /**
     * Minimum recommended age in years for the audience or user.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/suggestedMinAge
     */
    public int|float|array|null $suggestedMinAge = null;
}
