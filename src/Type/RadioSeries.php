<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RadioSeries.
 *
 * CreativeWorkSeries dedicated to radio broadcast and associated online
 * delivery.
 *
 * @see https://schema.org/RadioSeries
 */
class RadioSeries extends CreativeWorkSeries {

    public const SCHEMA_TYPE = 'RadioSeries';

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games
     * etc., or in an event. Actors can be associated with individual items or with
     * a series, episode, clip.
     *
     * @var PerformingGroup|Person|PerformingGroup[]|Person[]|null
     *
     * @see https://schema.org/actor
     */
    public PerformingGroup|Person|array|null $actor = null;

    /**
     * A season that is part of the media series.
     *
     * @var CreativeWorkSeason|CreativeWorkSeason[]|null
     *
     * @see https://schema.org/containsSeason
     */
    public CreativeWorkSeason|array|null $containsSeason = null;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/director
     */
    public Person|array|null $director = null;

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @var Episode|Episode[]|null
     *
     * @see https://schema.org/episode
     */
    public Episode|array|null $episode = null;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|MusicGroup[]|Person[]|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * The number of episodes in this season or series.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/numberOfEpisodes
     */
    public int|array|null $numberOfEpisodes = null;

    /**
     * The number of seasons in this series.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/numberOfSeasons
     */
    public int|array|null $numberOfSeasons = null;

    /**
     * The production company or studio responsible for the item, e.g. series,
     * video game, episode etc.
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/productionCompany
     */
    public Organization|array|null $productionCompany = null;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|VideoObject[]|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
