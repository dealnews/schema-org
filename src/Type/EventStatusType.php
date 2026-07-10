<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EventStatusType.
 *
 * EventStatusType is an enumeration type whose instances represent several
 * states that an Event may be in.
 *
 * @see https://schema.org/EventStatusType
 */
class EventStatusType extends StatusEnumeration {

    public const SCHEMA_TYPE = 'EventStatusType';

    public const EVENT_CANCELLED = 'https://schema.org/EventCancelled';
    public const EVENT_MOVED_ONLINE = 'https://schema.org/EventMovedOnline';
    public const EVENT_POSTPONED = 'https://schema.org/EventPostponed';
    public const EVENT_RESCHEDULED = 'https://schema.org/EventRescheduled';
    public const EVENT_SCHEDULED = 'https://schema.org/EventScheduled';
}
