<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DepositAccount.
 *
 * A type of Bank Account with a main purpose of depositing funds to gain
 * interest or other benefits.
 *
 * @see https://schema.org/DepositAccount
 */
class DepositAccount extends BankAccount {

    public const SCHEMA_TYPE = 'DepositAccount';

    /**
     * The amount of money.
     *
     * @var MonetaryAmount|int|float|array|null
     *
     * @see https://schema.org/amount
     */
    public MonetaryAmount|int|float|array|null $amount = null;
}
