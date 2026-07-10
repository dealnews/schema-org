<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ScheduleAction.
 *
 * Scheduling future actions, events, or tasks.
 *
 * Related actions:
 *
 * * [[ReserveAction]]: Unlike ReserveAction, ScheduleAction allocates future
 * actions (e.g. an event, a task, etc) towards a time slot / spatial
 * allocation.
 *
 * @see https://schema.org/ScheduleAction
 */
class ScheduleAction extends PlanAction {

    public const SCHEMA_TYPE = 'ScheduleAction';
}
