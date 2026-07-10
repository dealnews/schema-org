<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DeleteAction.
 *
 * The act of editing a recipient by removing one of its objects.
 *
 * @see https://schema.org/DeleteAction
 */
class DeleteAction extends UpdateAction {

    public const SCHEMA_TYPE = 'DeleteAction';
}
