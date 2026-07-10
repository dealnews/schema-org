<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TVSeries.
 *
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 *
 * @see https://schema.org/TVSeries
 */
class TVSeries extends CreativeWork {

    public const SCHEMA_TYPE = 'TVSeries';

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
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|array|null
     *
     * @see https://schema.org/endDate
     */
    public string|array|null $endDate = null;

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @var Episode|array|null
     *
     * @see https://schema.org/episode
     */
    public Episode|array|null $episode = null;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string|array|null
     *
     * @see https://schema.org/issn
     */
    public string|array|null $issn = null;

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
     * The number of seasons in this series.
     *
     * @var int|array|null
     *
     * @see https://schema.org/numberOfSeasons
     */
    public int|array|null $numberOfSeasons = null;

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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|array|null
     *
     * @see https://schema.org/startDate
     */
    public string|array|null $startDate = null;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|array|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
