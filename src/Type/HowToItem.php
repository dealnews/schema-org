<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowToItem.
 *
 * An item used as either a tool or supply when performing the instructions for
 * how to achieve a result.
 *
 * @see https://schema.org/HowToItem
 */
class HowToItem extends ListItem {

    public const SCHEMA_TYPE = 'HowToItem';

    /**
     * The required quantity of the item(s).
     *
     * @var int|float|QuantitativeValue|string|int[]|float[]|QuantitativeValue[]|string[]|null
     *
     * @see https://schema.org/requiredQuantity
     */
    public int|float|QuantitativeValue|string|array|null $requiredQuantity = null;
}
