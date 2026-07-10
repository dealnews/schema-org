<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AppendAction.
 *
 * The act of inserting at the end if an ordered collection.
 *
 * @see https://schema.org/AppendAction
 */
class AppendAction extends InsertAction {

    public const SCHEMA_TYPE = 'AppendAction';
}
