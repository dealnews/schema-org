<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WarrantyScope.
 *
 * A range of services that will be provided to a customer free of charge in
 * case of a defect or malfunction of a product.
 *
 * Commonly used values:
 *
 * * http://purl.org/goodrelations/v1#Labor-BringIn
 * * http://purl.org/goodrelations/v1#PartsAndLabor-BringIn
 * * http://purl.org/goodrelations/v1#PartsAndLabor-PickUp
 *
 * @see https://schema.org/WarrantyScope
 */
class WarrantyScope extends Enumeration {

    public const SCHEMA_TYPE = 'WarrantyScope';
}
