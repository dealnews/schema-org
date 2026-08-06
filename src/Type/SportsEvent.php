<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SportsEvent.
 *
 * Event type: Sports event.
 *
 * @see https://schema.org/SportsEvent
 */
class SportsEvent extends Event {

    public const SCHEMA_TYPE = 'SportsEvent';

    /**
     * The away team in a sports event.
     *
     * @var Person|SportsTeam|Person[]|SportsTeam[]|null
     *
     * @see https://schema.org/awayTeam
     */
    public Person|SportsTeam|array|null $awayTeam = null;

    /**
     * A competitor in a sports event.
     *
     * @var Person|SportsTeam|Person[]|SportsTeam[]|null
     *
     * @see https://schema.org/competitor
     */
    public Person|SportsTeam|array|null $competitor = null;

    /**
     * The home team in a sports event.
     *
     * @var Person|SportsTeam|Person[]|SportsTeam[]|null
     *
     * @see https://schema.org/homeTeam
     */
    public Person|SportsTeam|array|null $homeTeam = null;

    /**
     * An official who watches a game or match closely to enforce the rules and
     * arbitrate on matters arising from the play such as referees, umpires or
     * judges. The name of the effective function can vary according to the sport.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/referee
     */
    public Person|array|null $referee = null;
}
