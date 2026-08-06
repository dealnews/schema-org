<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LoanOrCredit.
 *
 * A financial product for the loaning of an amount of money, or line of
 * credit, under agreed terms and charges.
 *
 * @see https://schema.org/LoanOrCredit
 */
class LoanOrCredit extends FinancialProduct {

    public const SCHEMA_TYPE = 'LoanOrCredit';

    /**
     * The amount of money.
     *
     * @var MonetaryAmount|int|float|MonetaryAmount[]|int[]|float[]|null
     *
     * @see https://schema.org/amount
     */
    public MonetaryAmount|int|float|array|null $amount = null;

    /**
     * The currency in which the monetary amount is expressed.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
     * and other currency types, e.g. "Ithaca HOUR".
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/currency
     */
    public string|array|null $currency = null;

    /**
     * The duration of the loan or credit agreement.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/loanTerm
     */
    public QuantitativeValue|array|null $loanTerm = null;

    /**
     * Assets required to secure loan or credit repayments. It may take form of
     * third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/requiredCollateral
     */
    public string|Thing|array|null $requiredCollateral = null;
}
