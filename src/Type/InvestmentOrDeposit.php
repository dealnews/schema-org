<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * InvestmentOrDeposit.
 *
 * A type of financial product that typically requires the client to transfer
 * funds to a financial service in return for potential beneficial financial
 * return.
 *
 * @see https://schema.org/InvestmentOrDeposit
 */
class InvestmentOrDeposit extends FinancialProduct {

    public const SCHEMA_TYPE = 'InvestmentOrDeposit';

    /**
     * The amount of money.
     *
     * @var MonetaryAmount|int|float|MonetaryAmount[]|int[]|float[]|null
     *
     * @see https://schema.org/amount
     */
    public MonetaryAmount|int|float|array|null $amount = null;
}
