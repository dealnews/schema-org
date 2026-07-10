<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LikeAction.
 *
 * The act of expressing a positive sentiment about the object. An agent likes
 * an object (a proposition, topic or theme) with participants.
 *
 * @see https://schema.org/LikeAction
 */
class LikeAction extends ReactAction {

    public const SCHEMA_TYPE = 'LikeAction';
}
