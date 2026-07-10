<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * UnRegisterAction.
 *
 * The act of un-registering from a service.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: antonym of UnRegisterAction.
 * * [[LeaveAction]]: Unlike LeaveAction, UnRegisterAction implies that you are
 * unregistering from a service you were previously registered, rather than
 * leaving a team/group of people.
 *
 * @see https://schema.org/UnRegisterAction
 */
class UnRegisterAction extends InteractAction {

    public const SCHEMA_TYPE = 'UnRegisterAction';
}
