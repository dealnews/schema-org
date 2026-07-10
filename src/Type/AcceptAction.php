<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AcceptAction.
 *
 * The act of committing to/adopting an object.
 *
 * Related actions:
 *
 * * [[RejectAction]]: The antonym of AcceptAction.
 *
 * @see https://schema.org/AcceptAction
 */
class AcceptAction extends AllocateAction {

    public const SCHEMA_TYPE = 'AcceptAction';
}
