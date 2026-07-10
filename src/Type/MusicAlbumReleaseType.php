<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicAlbumReleaseType.
 *
 * The kind of release which this album is: single, EP or album.
 *
 * @see https://schema.org/MusicAlbumReleaseType
 */
class MusicAlbumReleaseType extends Enumeration {

    public const SCHEMA_TYPE = 'MusicAlbumReleaseType';

    public const ALBUM_RELEASE = 'https://schema.org/AlbumRelease';
    public const BROADCAST_RELEASE = 'https://schema.org/BroadcastRelease';
    public const EP_RELEASE = 'https://schema.org/EPRelease';
    public const SINGLE_RELEASE = 'https://schema.org/SingleRelease';
}
