<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WarrantyPromise.
 *
 * A structured value representing the duration and scope of services that will
 * be provided to a customer free of charge in case of a defect or malfunction
 * of a product.
 *
 * @see https://schema.org/WarrantyPromise
 */
class WarrantyPromise extends StructuredValue {

    public const SCHEMA_TYPE = 'WarrantyPromise';

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for
     * year, MON for months, or DAY for days.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/durationOfWarranty
     */
    public QuantitativeValue|array|null $durationOfWarranty = null;

    /**
     * The scope of the warranty promise.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/warrantyScope
     */
    public string|array|null $warrantyScope = null;
}
