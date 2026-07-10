<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowToSupply.
 *
 * A supply consumed when performing the instructions for how to achieve a
 * result.
 *
 * @see https://schema.org/HowToSupply
 */
class HowToSupply extends HowToItem {

    public const SCHEMA_TYPE = 'HowToSupply';

    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @var MonetaryAmount|string|array|null
     *
     * @see https://schema.org/estimatedCost
     */
    public MonetaryAmount|string|array|null $estimatedCost = null;
}
