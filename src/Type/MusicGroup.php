<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicGroup.
 *
 * A musical group, such as a band, an orchestra, or a choir. Can also be a
 * solo musician.
 *
 * @see https://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup {

    public const SCHEMA_TYPE = 'MusicGroup';

    /**
     * A music album.
     *
     * @var MusicAlbum|array|null
     *
     * @see https://schema.org/album
     */
    public MusicAlbum|array|null $album = null;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var string|array|null
     *
     * @see https://schema.org/genre
     */
    public string|array|null $genre = null;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is
     * given, the list should contain items of type MusicRecording.
     *
     * @var ItemList|MusicRecording|array|null
     *
     * @see https://schema.org/track
     */
    public ItemList|MusicRecording|array|null $track = null;
}
