<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PriceSpecification.
 *
 * A structured value representing a price or price range. Typically, only the
 * subclasses of this type are used for markup. It is recommended to use
 * [[MonetaryAmount]] to describe independent amounts of money such as a
 * salary, credit card limits, etc.
 *
 * @see https://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue {

    public const SCHEMA_TYPE = 'PriceSpecification';

    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/eligibleQuantity
     */
    public QuantitativeValue|array|null $eligibleQuantity = null;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var PriceSpecification|PriceSpecification[]|null
     *
     * @see https://schema.org/eligibleTransactionVolume
     */
    public PriceSpecification|array|null $eligibleTransactionVolume = null;

    /**
     * The highest price if the price is a range.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/maxPrice
     */
    public int|float|array|null $maxPrice = null;

    /**
     * The lowest price if the price is a range.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/minPrice
     */
    public int|float|array|null $minPrice = null;

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     *
     * Usage guidelines:
     *
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217
     * currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
     * and other currency types, e.g. "Ithaca HOUR") instead of including
     * [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
     * and Microdata syntax allow the use of a "content=" attribute for publishing
     * simple machine-readable values alongside more human-friendly formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     *
     * @var int|float|string|int[]|float[]|string[]|null
     *
     * @see https://schema.org/price
     */
    public int|float|string|array|null $price = null;

    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
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
     * @see https://schema.org/priceCurrency
     */
    public string|array|null $priceCurrency = null;

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
     * Specifies whether the applicable value-added tax (VAT) is included in the
     * price specification or not.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/valueAddedTaxIncluded
     */
    public bool|array|null $valueAddedTaxIncluded = null;
}
