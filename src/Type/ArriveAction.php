<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ArriveAction.
 *
 * The act of arriving at a place. An agent arrives at a destination from a
 * fromLocation, optionally with participants.
 *
 * @see https://schema.org/ArriveAction
 */
class ArriveAction extends MoveAction {

    public const SCHEMA_TYPE = 'ArriveAction';
}
