<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LeaveAction.
 *
 * An agent leaves an event / group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving
 * a group/team of people rather than a service.
 *
 * @see https://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction {

    public const SCHEMA_TYPE = 'LeaveAction';

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;
}
