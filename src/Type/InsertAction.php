<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * InsertAction.
 *
 * The act of adding at a specific location in an ordered collection.
 *
 * @see https://schema.org/InsertAction
 */
class InsertAction extends AddAction {

    public const SCHEMA_TYPE = 'InsertAction';

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/toLocation
     */
    public Place|array|null $toLocation = null;
}
