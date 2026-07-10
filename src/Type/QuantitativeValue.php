<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * QuantitativeValue.
 *
 * A point value or interval for product characteristics and other purposes.
 *
 * @see https://schema.org/QuantitativeValue
 */
class QuantitativeValue extends StructuredValue {

    public const SCHEMA_TYPE = 'QuantitativeValue';

    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @var PropertyValue|array|null
     *
     * @see https://schema.org/additionalProperty
     */
    public PropertyValue|array|null $additionalProperty = null;

    /**
     * The upper value of some characteristic or property.
     *
     * @var int|float|array|null
     *
     * @see https://schema.org/maxValue
     */
    public int|float|array|null $maxValue = null;

    /**
     * The lower value of some characteristic or property.
     *
     * @var int|float|array|null
     *
     * @see https://schema.org/minValue
     */
    public int|float|array|null $minValue = null;

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
     * @var bool|int|float|StructuredValue|string|array|null
     *
     * @see https://schema.org/value
     */
    public bool|int|float|StructuredValue|string|array|null $value = null;

    /**
     * A secondary value that provides additional information on the original
     * value, e.g. a reference temperature or a type of measurement.
     *
     * @var string|PropertyValue|QuantitativeValue|StructuredValue|array|null
     *
     * @see https://schema.org/valueReference
     */
    public string|PropertyValue|QuantitativeValue|StructuredValue|array|null $valueReference = null;
}
