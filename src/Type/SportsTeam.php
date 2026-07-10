<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SportsTeam.
 *
 * Organization: Sports team.
 *
 * @see https://schema.org/SportsTeam
 */
class SportsTeam extends SportsOrganization {

    public const SCHEMA_TYPE = 'SportsTeam';

    /**
     * A person that acts as performing member of a sports team; a player as
     * opposed to a coach.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/athlete
     */
    public Person|array|null $athlete = null;

    /**
     * A person that acts in a coaching role for a sports team.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/coach
     */
    public Person|array|null $coach = null;
}
