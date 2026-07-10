<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AssignAction.
 *
 * The act of allocating an action/event/task to some destination (someone or
 * something).
 *
 * @see https://schema.org/AssignAction
 */
class AssignAction extends AllocateAction {

    public const SCHEMA_TYPE = 'AssignAction';
}
