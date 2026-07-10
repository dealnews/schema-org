<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PlayAction.
 *
 * The act of playing/exercising/training/performing for enjoyment, leisure,
 * recreation, competition or exercise.
 *
 * Related actions:
 *
 * * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction),
 * PlayAction refers to performing for an audience or at an event, rather than
 * consuming music.
 * * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction),
 * PlayAction refers to showing/displaying for an audience or at an event,
 * rather than consuming visual content.
 *
 * @see https://schema.org/PlayAction
 */
class PlayAction extends Action {

    public const SCHEMA_TYPE = 'PlayAction';

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|array|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;
}
