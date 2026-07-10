<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ApplyAction.
 *
 * The act of registering to an organization/service without the guarantee to
 * receive it.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: Unlike RegisterAction, ApplyAction has no guarantees
 * that the application will be accepted.
 *
 * @see https://schema.org/ApplyAction
 */
class ApplyAction extends OrganizeAction {

    public const SCHEMA_TYPE = 'ApplyAction';
}
