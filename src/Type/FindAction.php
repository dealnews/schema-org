<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * FindAction.
 *
 * The act of finding an object.
 *
 * Related actions:
 *
 * * [[SearchAction]]: FindAction is generally lead by a SearchAction, but not
 * necessarily.
 *
 * @see https://schema.org/FindAction
 */
class FindAction extends Action {

    public const SCHEMA_TYPE = 'FindAction';
}
