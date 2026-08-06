<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TravelAction.
 *
 * The act of traveling from a fromLocation to a destination by a specified
 * mode of transport, optionally with participants.
 *
 * @see https://schema.org/TravelAction
 */
class TravelAction extends MoveAction {

    public const SCHEMA_TYPE = 'TravelAction';

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/distance
     */
    public string|array|null $distance = null;
}
