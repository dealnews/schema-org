<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PlanAction.
 *
 * The act of planning the execution of an event/task/action/reservation/plan
 * to a future date.
 *
 * @see https://schema.org/PlanAction
 */
class PlanAction extends OrganizeAction {

    public const SCHEMA_TYPE = 'PlanAction';

    /**
     * The time the object is scheduled to.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/scheduledTime
     */
    public string|array|null $scheduledTime = null;
}
