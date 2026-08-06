<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MonetaryAmount.
 *
 * A monetary value or range. This type can be used to describe an amount of
 * money such as $50 USD, or a range as in describing a bank account being
 * suitable for a balance between £1,000 and £1,000,000 GBP, or the value of
 * a salary, etc. It is recommended to use [[PriceSpecification]] Types to
 * describe the price of an Offer, Invoice, etc.
 *
 * @see https://schema.org/MonetaryAmount
 */
class MonetaryAmount extends StructuredValue {

    public const SCHEMA_TYPE = 'MonetaryAmount';

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
     * The upper value of some characteristic or property.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/maxValue
     */
    public int|float|array|null $maxValue = null;

    /**
     * The lower value of some characteristic or property.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/minValue
     */
    public int|float|array|null $minValue = null;

    /**
     * The date when the item becomes valid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validFrom
     */
    public string|array|null $validFrom = null;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validThrough
     */
    public string|array|null $validThrough = null;

    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property
     * value node.
     *
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
     * values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or
     * 'StructuredValue'.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @var bool|int|float|StructuredValue|string|bool[]|int[]|float[]|StructuredValue[]|string[]|null
     *
     * @see https://schema.org/value
     */
    public bool|int|float|StructuredValue|string|array|null $value = null;
}
