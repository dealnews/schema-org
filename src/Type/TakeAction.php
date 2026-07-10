<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TakeAction.
 *
 * The act of gaining ownership of an object from an origin. Reciprocal of
 * GiveAction.
 *
 * Related actions:
 *
 * * [[GiveAction]]: The reciprocal of TakeAction.
 * * [[ReceiveAction]]: Unlike ReceiveAction, TakeAction implies that ownership
 * has been transferred.
 *
 * @see https://schema.org/TakeAction
 */
class TakeAction extends TransferAction {

    public const SCHEMA_TYPE = 'TakeAction';
}
