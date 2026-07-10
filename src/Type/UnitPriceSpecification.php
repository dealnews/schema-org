<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * UnitPriceSpecification.
 *
 * The price asked for a given offer by the respective organization or person.
 *
 * @see https://schema.org/UnitPriceSpecification
 */
class UnitPriceSpecification extends PriceSpecification {

    public const SCHEMA_TYPE = 'UnitPriceSpecification';

    /**
     * This property specifies the minimal quantity and rounding increment that
     * will be the basis for the billing. The unit of measurement is specified by
     * the unitCode property.
     *
     * @var int|float|array|null
     *
     * @see https://schema.org/billingIncrement
     */
    public int|float|array|null $billingIncrement = null;

    /**
     * Defines the type of a price specified for an offered product, for example a
     * list price, a (temporary) sale price or a manufacturer suggested retail
     * price. If multiple prices are specified for an offer the [[priceType]]
     * property can be used to identify the type of each such specified price. The
     * value of priceType can be specified as a value from enumeration
     * PriceTypeEnumeration or, a UN/EDIFACT 5387 code, or as a free form text
     * string for price types that are not already predefined in
     * PriceTypeEnumeration.
     *
     * @var string|array|null
     *
     * @see https://schema.org/priceType
     */
    public string|array|null $priceType = null;

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4
     * kWh of electricity. This property is a replacement for unitOfMeasurement for
     * the advanced cases where the price does not relate to a standard unit.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/referenceQuantity
     */
    public QuantitativeValue|array|null $referenceQuantity = null;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
     * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
     * prefix followed by a colon.
     *
     * @var string|array|null
     *
     * @see https://schema.org/unitCode
     */
    public string|array|null $unitCode = null;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @var string|array|null
     *
     * @see https://schema.org/unitText
     */
    public string|array|null $unitText = null;
}
