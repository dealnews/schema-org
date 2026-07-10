<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicAlbumProductionType.
 *
 * Classification of the album by its type of content: soundtrack, live album,
 * studio album, etc.
 *
 * @see https://schema.org/MusicAlbumProductionType
 */
class MusicAlbumProductionType extends Enumeration {

    public const SCHEMA_TYPE = 'MusicAlbumProductionType';

    public const COMPILATION_ALBUM = 'https://schema.org/CompilationAlbum';
    public const DJ_MIX_ALBUM = 'https://schema.org/DJMixAlbum';
    public const DEMO_ALBUM = 'https://schema.org/DemoAlbum';
    public const LIVE_ALBUM = 'https://schema.org/LiveAlbum';
    public const MIXTAPE_ALBUM = 'https://schema.org/MixtapeAlbum';
    public const REMIX_ALBUM = 'https://schema.org/RemixAlbum';
    public const SOUNDTRACK_ALBUM = 'https://schema.org/SoundtrackAlbum';
    public const SPOKEN_WORD_ALBUM = 'https://schema.org/SpokenWordAlbum';
    public const STUDIO_ALBUM = 'https://schema.org/StudioAlbum';
}
