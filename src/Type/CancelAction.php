<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CancelAction.
 *
 * The act of asserting that a future event/action is no longer going to
 * happen.
 *
 * Related actions:
 *
 * * [[ConfirmAction]]: The antonym of CancelAction.
 *
 * @see https://schema.org/CancelAction
 */
class CancelAction extends PlanAction {

    public const SCHEMA_TYPE = 'CancelAction';
}
