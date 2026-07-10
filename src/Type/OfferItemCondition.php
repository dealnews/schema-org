<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OfferItemCondition.
 *
 * A list of possible conditions for the item.
 *
 * @see https://schema.org/OfferItemCondition
 */
class OfferItemCondition extends Enumeration {

    public const SCHEMA_TYPE = 'OfferItemCondition';

    public const DAMAGED_CONDITION = 'https://schema.org/DamagedCondition';
    public const NEW_CONDITION = 'https://schema.org/NewCondition';
    public const REFURBISHED_CONDITION = 'https://schema.org/RefurbishedCondition';
    public const USED_CONDITION = 'https://schema.org/UsedCondition';
}
