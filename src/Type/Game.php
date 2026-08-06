<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Game.
 *
 * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which
 * players assume the role of characters in a fictional setting.
 *
 * @see https://schema.org/Game
 */
class Game extends CreativeWork {

    public const SCHEMA_TYPE = 'Game';

    /**
     * A piece of data that represents a particular aspect of a fictional character
     * (skill, power, character points, advantage, disadvantage).
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/characterAttribute
     */
    public Thing|array|null $characterAttribute = null;

    /**
     * An item is an object within the game world that can be collected by a player
     * or, occasionally, a non-player character.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/gameItem
     */
    public Thing|array|null $gameItem = null;

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @var Place|PostalAddress|string|Place[]|PostalAddress[]|string[]|null
     *
     * @see https://schema.org/gameLocation
     */
    public Place|PostalAddress|string|array|null $gameLocation = null;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/numberOfPlayers
     */
    public QuantitativeValue|array|null $numberOfPlayers = null;

    /**
     * The task that a player-controlled character, or group of characters may
     * complete in order to gain a reward.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/quest
     */
    public Thing|array|null $quest = null;
}
