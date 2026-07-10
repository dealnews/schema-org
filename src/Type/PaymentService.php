<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PaymentService.
 *
 * A Service to transfer funds from a person or organization to a beneficiary
 * person or organization.
 *
 * @see https://schema.org/PaymentService
 */
class PaymentService extends FinancialProduct {

    public const SCHEMA_TYPE = 'PaymentService';
}
