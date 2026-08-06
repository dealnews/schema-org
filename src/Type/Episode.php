<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Episode.
 *
 * A media episode (e.g. TV, radio, video game) which can be part of a series
 * or season.
 *
 * @see https://schema.org/Episode
 */
class Episode extends CreativeWork {

    public const SCHEMA_TYPE = 'Episode';

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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/duration
     */
    public string|QuantitativeValue|array|null $duration = null;

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/episodeNumber
     */
    public int|string|array|null $episodeNumber = null;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|MusicGroup[]|Person[]|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * The season to which this episode belongs.
     *
     * @var CreativeWorkSeason|CreativeWorkSeason[]|null
     *
     * @see https://schema.org/partOfSeason
     */
    public CreativeWorkSeason|array|null $partOfSeason = null;

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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|VideoObject[]|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
