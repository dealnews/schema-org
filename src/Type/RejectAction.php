<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RejectAction.
 *
 * The act of rejecting to/adopting an object.
 *
 * Related actions:
 *
 * * [[AcceptAction]]: The antonym of RejectAction.
 *
 * @see https://schema.org/RejectAction
 */
class RejectAction extends AllocateAction {

    public const SCHEMA_TYPE = 'RejectAction';
}
