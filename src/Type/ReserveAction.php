<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReserveAction.
 *
 * Reserving a concrete object.
 *
 * Related actions:
 *
 * * [[ScheduleAction]]: Unlike ScheduleAction, ReserveAction reserves concrete
 * objects (e.g. a table, a hotel) towards a time slot / spatial allocation.
 *
 * @see https://schema.org/ReserveAction
 */
class ReserveAction extends PlanAction {

    public const SCHEMA_TYPE = 'ReserveAction';
}
