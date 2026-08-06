<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * JoinAction.
 *
 * An agent joins an event/group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a
 * group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply
 * that you'll be receiving updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that
 * you'll be polling for updates.
 *
 * @see https://schema.org/JoinAction
 */
class JoinAction extends InteractAction {

    public const SCHEMA_TYPE = 'JoinAction';

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;
}
