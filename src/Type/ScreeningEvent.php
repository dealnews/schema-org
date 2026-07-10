<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ScreeningEvent.
 *
 * A screening of a movie or other video.
 *
 * @see https://schema.org/ScreeningEvent
 */
class ScreeningEvent extends Event {

    public const SCHEMA_TYPE = 'ScreeningEvent';

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/videoFormat
     */
    public string|array|null $videoFormat = null;

    /**
     * The movie presented during this event.
     *
     * @var Movie|array|null
     *
     * @see https://schema.org/workPresented
     */
    public Movie|array|null $workPresented = null;
}
