<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MonetaryAmountDistribution.
 *
 * A statistical distribution of monetary amounts.
 *
 * @see https://schema.org/MonetaryAmountDistribution
 */
class MonetaryAmountDistribution extends QuantitativeValueDistribution {

    public const SCHEMA_TYPE = 'MonetaryAmountDistribution';

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
}
