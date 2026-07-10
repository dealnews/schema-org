<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DislikeAction.
 *
 * The act of expressing a negative sentiment about the object. An agent
 * dislikes an object (a proposition, topic or theme) with participants.
 *
 * @see https://schema.org/DislikeAction
 */
class DislikeAction extends ReactAction {

    public const SCHEMA_TYPE = 'DislikeAction';
}
