<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicRecording.
 *
 * A music recording (track), usually a single song.
 *
 * @see https://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork {

    public const SCHEMA_TYPE = 'MusicRecording';

    /**
     * The artist that performed this album or recording.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/byArtist
     */
    public MusicGroup|Person|array|null $byArtist = null;

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
     * The album to which this recording belongs.
     *
     * @var MusicAlbum|array|null
     *
     * @see https://schema.org/inAlbum
     */
    public MusicAlbum|array|null $inAlbum = null;

    /**
     * The playlist to which this recording belongs.
     *
     * @var MusicPlaylist|array|null
     *
     * @see https://schema.org/inPlaylist
     */
    public MusicPlaylist|array|null $inPlaylist = null;

    /**
     * The International Standard Recording Code for the recording.
     *
     * @var string|array|null
     *
     * @see https://schema.org/isrcCode
     */
    public string|array|null $isrcCode = null;

    /**
     * The composition this track is a recording of.
     *
     * @var MusicComposition|array|null
     *
     * @see https://schema.org/recordingOf
     */
    public MusicComposition|array|null $recordingOf = null;
}
