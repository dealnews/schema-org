<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * InviteAction.
 *
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @see https://schema.org/InviteAction
 */
class InviteAction extends CommunicateAction {

    public const SCHEMA_TYPE = 'InviteAction';

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;
}
