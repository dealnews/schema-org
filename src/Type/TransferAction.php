<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TransferAction.
 *
 * The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
 *
 * @see https://schema.org/TransferAction
 */
class TransferAction extends Action {

    public const SCHEMA_TYPE = 'TransferAction';

    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/fromLocation
     */
    public Place|array|null $fromLocation = null;

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
