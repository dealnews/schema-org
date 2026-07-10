<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PropertyValue.
 *
 * A property-value pair, e.g. representing a feature of a product or place.
 * Use the 'name' property for the name of the property. If there is an
 * additional human-readable version of the value, put that into the
 * 'description' property.
 *
 *  Always use specific schema.org properties when a) they exist and b) you can
 * populate them. Using PropertyValue as a substitute will typically not
 * trigger the same effect as using the original, specific property.
 *
 * @see https://schema.org/PropertyValue
 */
class PropertyValue extends StructuredValue {

    public const SCHEMA_TYPE = 'PropertyValue';

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
     * A commonly used identifier for the characteristic represented by the
     * property, e.g. a manufacturer or a standard code for a property. propertyID
     * can be
     * (1) a prefixed string, mainly meant to be used with standards for product
     * properties; (2) a site-specific, non-prefixed string (e.g. the primary key
     * of the property or the vendor-specific ID of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external
     * vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry).
     * Standards bodies should promote a standard prefix for the identifiers of
     * properties from their standards.
     *
     * @var string|array|null
     *
     * @see https://schema.org/propertyID
     */
    public string|array|null $propertyID = null;

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
