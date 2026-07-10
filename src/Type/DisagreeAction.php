<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DisagreeAction.
 *
 * The act of expressing a difference of opinion with the object. An agent
 * disagrees to/about an object (a proposition, topic or theme) with
 * participants.
 *
 * @see https://schema.org/DisagreeAction
 */
class DisagreeAction extends ReactAction {

    public const SCHEMA_TYPE = 'DisagreeAction';
}
