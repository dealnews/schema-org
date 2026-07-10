<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * VideoGameSeries.
 *
 * A video game series.
 *
 * @see https://schema.org/VideoGameSeries
 */
class VideoGameSeries extends CreativeWorkSeries {

    public const SCHEMA_TYPE = 'VideoGameSeries';

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games
     * etc., or in an event. Actors can be associated with individual items or with
     * a series, episode, clip.
     *
     * @var PerformingGroup|Person|array|null
     *
     * @see https://schema.org/actor
     */
    public PerformingGroup|Person|array|null $actor = null;

    /**
     * A piece of data that represents a particular aspect of a fictional character
     * (skill, power, character points, advantage, disadvantage).
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/characterAttribute
     */
    public Thing|array|null $characterAttribute = null;

    /**
     * Cheat codes to the game.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/cheatCode
     */
    public CreativeWork|array|null $cheatCode = null;

    /**
     * A season that is part of the media series.
     *
     * @var CreativeWorkSeason|array|null
     *
     * @see https://schema.org/containsSeason
     */
    public CreativeWorkSeason|array|null $containsSeason = null;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/director
     */
    public Person|array|null $director = null;

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @var Episode|array|null
     *
     * @see https://schema.org/episode
     */
    public Episode|array|null $episode = null;

    /**
     * An item is an object within the game world that can be collected by a player
     * or, occasionally, a non-player character.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/gameItem
     */
    public Thing|array|null $gameItem = null;

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @var Place|PostalAddress|string|array|null
     *
     * @see https://schema.org/gameLocation
     */
    public Place|PostalAddress|string|array|null $gameLocation = null;

    /**
     * The electronic systems used to play <a
     * href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video
     * games</a>.
     *
     * @var string|Thing|array|null
     *
     * @see https://schema.org/gamePlatform
     */
    public string|Thing|array|null $gamePlatform = null;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * The number of episodes in this season or series.
     *
     * @var int|array|null
     *
     * @see https://schema.org/numberOfEpisodes
     */
    public int|array|null $numberOfEpisodes = null;

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/numberOfPlayers
     */
    public QuantitativeValue|array|null $numberOfPlayers = null;

    /**
     * The number of seasons in this series.
     *
     * @var int|array|null
     *
     * @see https://schema.org/numberOfSeasons
     */
    public int|array|null $numberOfSeasons = null;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The
     * game can be marked as multi-player, co-op and single-player at the same
     * time.
     *
     * @var string|array|null
     *
     * @see https://schema.org/playMode
     */
    public string|array|null $playMode = null;

    /**
     * The production company or studio responsible for the item, e.g. series,
     * video game, episode etc.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/productionCompany
     */
    public Organization|array|null $productionCompany = null;

    /**
     * The task that a player-controlled character, or group of characters may
     * complete in order to gain a reward.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/quest
     */
    public Thing|array|null $quest = null;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|array|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
