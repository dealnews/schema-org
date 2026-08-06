<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Clip.
 *
 * A short TV or radio program or a segment/part of a program.
 *
 * @see https://schema.org/Clip
 */
class Clip extends CreativeWork {

    public const SCHEMA_TYPE = 'Clip';

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
     * Position of the clip within an ordered group of clips.
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/clipNumber
     */
    public int|string|array|null $clipNumber = null;

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
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|MusicGroup[]|Person[]|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * The episode to which this clip belongs.
     *
     * @var Episode|Episode[]|null
     *
     * @see https://schema.org/partOfEpisode
     */
    public Episode|array|null $partOfEpisode = null;

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
}
