<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ConfirmAction.
 *
 * The act of notifying someone that a future event/action is going to happen
 * as expected.
 *
 * Related actions:
 *
 * * [[CancelAction]]: The antonym of ConfirmAction.
 *
 * @see https://schema.org/ConfirmAction
 */
class ConfirmAction extends InformAction {

    public const SCHEMA_TYPE = 'ConfirmAction';
}
