<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PublicationEvent.
 *
 * A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type, e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @see https://schema.org/PublicationEvent
 */
class PublicationEvent extends Event {

    public const SCHEMA_TYPE = 'PublicationEvent';

    /**
     * A broadcast service associated with the publication event.
     *
     * @var BroadcastService|array|null
     *
     * @see https://schema.org/publishedOn
     */
    public BroadcastService|array|null $publishedOn = null;
}
