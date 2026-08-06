<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SomeProducts.
 *
 * A placeholder for multiple similar products of the same kind.
 *
 * @see https://schema.org/SomeProducts
 */
class SomeProducts extends Product {

    public const SCHEMA_TYPE = 'SomeProducts';

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/inventoryLevel
     */
    public QuantitativeValue|array|null $inventoryLevel = null;
}
