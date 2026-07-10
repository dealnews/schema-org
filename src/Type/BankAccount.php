<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BankAccount.
 *
 * A product or service offered by a bank whereby one may deposit, withdraw or
 * transfer money and in some cases be paid interest.
 *
 * @see https://schema.org/BankAccount
 */
class BankAccount extends FinancialProduct {

    public const SCHEMA_TYPE = 'BankAccount';
}
