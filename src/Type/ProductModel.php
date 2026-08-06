<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ProductModel.
 *
 * A datasheet or vendor specification of a product (in the sense of a
 * prototypical description).
 *
 * @see https://schema.org/ProductModel
 */
class ProductModel extends Product {

    public const SCHEMA_TYPE = 'ProductModel';

    /**
     * A pointer from a previous, often discontinued variant of the product to its
     * newer variant.
     *
     * @var ProductModel|ProductModel[]|null
     *
     * @see https://schema.org/predecessorOf
     */
    public ProductModel|array|null $predecessorOf = null;

    /**
     * A pointer from a newer variant of a product  to its previous, often
     * discontinued predecessor.
     *
     * @var ProductModel|ProductModel[]|null
     *
     * @see https://schema.org/successorOf
     */
    public ProductModel|array|null $successorOf = null;
}
