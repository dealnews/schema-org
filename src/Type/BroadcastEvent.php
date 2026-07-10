<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BroadcastEvent.
 *
 * An over the air or online broadcast event.
 *
 * @see https://schema.org/BroadcastEvent
 */
class BroadcastEvent extends PublicationEvent {

    public const SCHEMA_TYPE = 'BroadcastEvent';

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/broadcastOfEvent
     */
    public Event|array|null $broadcastOfEvent = null;

    /**
     * True if the broadcast is of a live event.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/isLiveBroadcast
     */
    public bool|array|null $isLiveBroadcast = null;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/videoFormat
     */
    public string|array|null $videoFormat = null;
}
