<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BefriendAction.
 *
 * The act of forming a personal connection with someone (object)
 * mutually/bidirectionally/symmetrically.
 *
 * Related actions:
 *
 * * [[FollowAction]]: Unlike FollowAction, BefriendAction implies that the
 * connection is reciprocal.
 *
 * @see https://schema.org/BefriendAction
 */
class BefriendAction extends InteractAction {

    public const SCHEMA_TYPE = 'BefriendAction';
}
