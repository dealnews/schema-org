<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * VideoObject.
 *
 * A video file.
 *
 * @see https://schema.org/VideoObject
 */
class VideoObject extends MediaObject {

    public const SCHEMA_TYPE = 'VideoObject';

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
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/transcript
     */
    public string|array|null $transcript = null;

    /**
     * The frame size of the video.
     *
     * @var string|array|null
     *
     * @see https://schema.org/videoFrameSize
     */
    public string|array|null $videoFrameSize = null;

    /**
     * The quality of the video.
     *
     * @var string|array|null
     *
     * @see https://schema.org/videoQuality
     */
    public string|array|null $videoQuality = null;
}
