<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MoveAction.
 *
 * The act of an agent relocating to a place.
 *
 * Related actions:
 *
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a
 * living Person or Organization rather than an inanimate object.
 *
 * @see https://schema.org/MoveAction
 */
class MoveAction extends Action {

    public const SCHEMA_TYPE = 'MoveAction';

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
