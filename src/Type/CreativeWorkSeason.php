<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CreativeWorkSeason.
 *
 * A media season, e.g. TV, radio, video game etc.
 *
 * @see https://schema.org/CreativeWorkSeason
 */
class CreativeWorkSeason extends CreativeWork {

    public const SCHEMA_TYPE = 'CreativeWorkSeason';

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
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/endDate
     */
    public string|array|null $endDate = null;

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @var Episode|Episode[]|null
     *
     * @see https://schema.org/episode
     */
    public Episode|array|null $episode = null;

    /**
     * The number of episodes in this season or series.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/numberOfEpisodes
     */
    public int|array|null $numberOfEpisodes = null;

    /**
     * The series to which this episode or season belongs.
     *
     * @var CreativeWorkSeries|CreativeWorkSeries[]|null
     *
     * @see https://schema.org/partOfSeries
     */
    public CreativeWorkSeries|array|null $partOfSeries = null;

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
     * Position of the season within an ordered group of seasons.
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/seasonNumber
     */
    public int|string|array|null $seasonNumber = null;

    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/startDate
     */
    public string|array|null $startDate = null;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|VideoObject[]|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
