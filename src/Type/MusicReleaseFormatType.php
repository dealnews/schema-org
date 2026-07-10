<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicReleaseFormatType.
 *
 * Format of this release (the type of recording media used, i.e. compact disc,
 * digital media, LP, etc.).
 *
 * @see https://schema.org/MusicReleaseFormatType
 */
class MusicReleaseFormatType extends Enumeration {

    public const SCHEMA_TYPE = 'MusicReleaseFormatType';

    public const CD_FORMAT = 'https://schema.org/CDFormat';
    public const CASSETTE_FORMAT = 'https://schema.org/CassetteFormat';
    public const DVD_FORMAT = 'https://schema.org/DVDFormat';
    public const DIGITAL_AUDIO_TAPE_FORMAT = 'https://schema.org/DigitalAudioTapeFormat';
    public const DIGITAL_FORMAT = 'https://schema.org/DigitalFormat';
    public const LASER_DISC_FORMAT = 'https://schema.org/LaserDiscFormat';
    public const VINYL_FORMAT = 'https://schema.org/VinylFormat';
}
