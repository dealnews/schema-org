<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AudioObject.
 *
 * An audio file.
 *
 * @see https://schema.org/AudioObject
 */
class AudioObject extends MediaObject {

    public const SCHEMA_TYPE = 'AudioObject';

    /**
     * The caption for this object. For downloadable machine formats (closed
     * caption, subtitles etc.) use MediaObject and indicate the
     * [[encodingFormat]].
     *
     * @var MediaObject|string|array|null
     *
     * @see https://schema.org/caption
     */
    public MediaObject|string|array|null $caption = null;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/transcript
     */
    public string|array|null $transcript = null;
}
