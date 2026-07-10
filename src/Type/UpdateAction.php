<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * UpdateAction.
 *
 * The act of managing by changing/editing the state of the object.
 *
 * @see https://schema.org/UpdateAction
 */
class UpdateAction extends Action {

    public const SCHEMA_TYPE = 'UpdateAction';

    /**
     * A sub property of object. The collection target of the action.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/targetCollection
     */
    public Thing|array|null $targetCollection = null;
}
