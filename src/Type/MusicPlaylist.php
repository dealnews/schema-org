<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicPlaylist.
 *
 * A collection of music tracks in playlist form.
 *
 * @see https://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork {

    public const SCHEMA_TYPE = 'MusicPlaylist';

    /**
     * The number of tracks in this album or playlist.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/numTracks
     */
    public int|array|null $numTracks = null;

    /**
     * A music recording (track)—usually a single song. If an ItemList is given,
     * the list should contain items of type MusicRecording.
     *
     * @var ItemList|MusicRecording|ItemList[]|MusicRecording[]|null
     *
     * @see https://schema.org/track
     */
    public ItemList|MusicRecording|array|null $track = null;
}
