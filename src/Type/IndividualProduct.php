<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * IndividualProduct.
 *
 * A single, identifiable product instance (e.g. a laptop with a particular
 * serial number).
 *
 * @see https://schema.org/IndividualProduct
 */
class IndividualProduct extends Product {

    public const SCHEMA_TYPE = 'IndividualProduct';

    /**
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @var string|array|null
     *
     * @see https://schema.org/serialNumber
     */
    public string|array|null $serialNumber = null;
}
