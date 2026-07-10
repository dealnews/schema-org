<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HomeAndConstructionBusiness.
 *
 * A construction business.
 *
 * A HomeAndConstructionBusiness is a [[LocalBusiness]] that provides services
 * around homes and buildings.
 *
 * As a [[LocalBusiness]] it can be described as a [[provider]] of one or more
 * [[Service]]\(s).
 *
 * @see https://schema.org/HomeAndConstructionBusiness
 */
class HomeAndConstructionBusiness extends LocalBusiness {

    public const SCHEMA_TYPE = 'HomeAndConstructionBusiness';
}
