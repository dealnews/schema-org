<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SearchAction.
 *
 * The act of searching for an object.
 *
 * Related actions:
 *
 * * [[FindAction]]: SearchAction generally leads to a FindAction, but not
 * necessarily.
 *
 * @see https://schema.org/SearchAction
 */
class SearchAction extends Action {

    public const SCHEMA_TYPE = 'SearchAction';

    /**
     * A sub property of instrument. The query used on this action.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/query
     */
    public string|array|null $query = null;
}
