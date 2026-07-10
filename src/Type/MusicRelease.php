<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicRelease.
 *
 * A MusicRelease is a specific release of a music album.
 *
 * @see https://schema.org/MusicRelease
 */
class MusicRelease extends MusicPlaylist {

    public const SCHEMA_TYPE = 'MusicRelease';

    /**
     * The catalog number for the release.
     *
     * @var string|array|null
     *
     * @see https://schema.org/catalogNumber
     */
    public string|array|null $catalogNumber = null;

    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady
     * Gaga.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/creditedTo
     */
    public Organization|Person|array|null $creditedTo = null;

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
     * Format of this release (the type of recording media used, i.e. compact disc,
     * digital media, LP, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/musicReleaseFormat
     */
    public string|array|null $musicReleaseFormat = null;

    /**
     * The label that issued the release.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/recordLabel
     */
    public Organization|array|null $recordLabel = null;

    /**
     * The album this is a release of.
     *
     * @var MusicAlbum|array|null
     *
     * @see https://schema.org/releaseOf
     */
    public MusicAlbum|array|null $releaseOf = null;
}
