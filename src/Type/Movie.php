<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Movie.
 *
 * A movie.
 *
 * @see https://schema.org/Movie
 */
class Movie extends CreativeWork {

    public const SCHEMA_TYPE = 'Movie';

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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|QuantitativeValue|array|null
     *
     * @see https://schema.org/duration
     */
    public string|QuantitativeValue|array|null $duration = null;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|array|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
