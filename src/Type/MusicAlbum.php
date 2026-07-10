<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicAlbum.
 *
 * A collection of music tracks.
 *
 * @see https://schema.org/MusicAlbum
 */
class MusicAlbum extends MusicPlaylist {

    public const SCHEMA_TYPE = 'MusicAlbum';

    /**
     * Classification of the album by its type of content: soundtrack, live album,
     * studio album, etc.
     *
     * @var string|array|null
     *
     * @see https://schema.org/albumProductionType
     */
    public string|array|null $albumProductionType = null;

    /**
     * A release of this album.
     *
     * @var MusicRelease|array|null
     *
     * @see https://schema.org/albumRelease
     */
    public MusicRelease|array|null $albumRelease = null;

    /**
     * The kind of release which this album is: single, EP or album.
     *
     * @var string|array|null
     *
     * @see https://schema.org/albumReleaseType
     */
    public string|array|null $albumReleaseType = null;

    /**
     * The artist that performed this album or recording.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/byArtist
     */
    public MusicGroup|Person|array|null $byArtist = null;
}
