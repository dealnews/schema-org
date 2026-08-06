<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * InformAction.
 *
 * The act of notifying someone of information pertinent to them, with no
 * expectation of a response.
 *
 * @see https://schema.org/InformAction
 */
class InformAction extends CommunicateAction {

    public const SCHEMA_TYPE = 'InformAction';

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;
}
