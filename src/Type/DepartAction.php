<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DepartAction.
 *
 * The act of  departing from a place. An agent departs from a fromLocation for
 * a destination, optionally with participants.
 *
 * @see https://schema.org/DepartAction
 */
class DepartAction extends MoveAction {

    public const SCHEMA_TYPE = 'DepartAction';
}
