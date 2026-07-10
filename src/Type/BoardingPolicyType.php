<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BoardingPolicyType.
 *
 * A type of boarding policy used by an airline.
 *
 * @see https://schema.org/BoardingPolicyType
 */
class BoardingPolicyType extends Enumeration {

    public const SCHEMA_TYPE = 'BoardingPolicyType';

    public const GROUP_BOARDING_POLICY = 'https://schema.org/GroupBoardingPolicy';
    public const ZONE_BOARDING_POLICY = 'https://schema.org/ZoneBoardingPolicy';
}
