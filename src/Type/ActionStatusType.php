<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ActionStatusType.
 *
 * The status of an Action.
 *
 * @see https://schema.org/ActionStatusType
 */
class ActionStatusType extends StatusEnumeration {

    public const SCHEMA_TYPE = 'ActionStatusType';

    public const ACTIVE_ACTION_STATUS = 'https://schema.org/ActiveActionStatus';
    public const COMPLETED_ACTION_STATUS = 'https://schema.org/CompletedActionStatus';
    public const FAILED_ACTION_STATUS = 'https://schema.org/FailedActionStatus';
    public const POTENTIAL_ACTION_STATUS = 'https://schema.org/PotentialActionStatus';
}
