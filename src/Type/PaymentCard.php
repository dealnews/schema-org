<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PaymentCard.
 *
 * A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
 *
 * @see https://schema.org/PaymentCard
 */
class PaymentCard extends FinancialProduct {

    public const SCHEMA_TYPE = 'PaymentCard';
}
