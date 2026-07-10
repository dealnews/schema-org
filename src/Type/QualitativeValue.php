<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * QualitativeValue.
 *
 * A predefined value for a product characteristic, e.g. the power cord plug
 * type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @see https://schema.org/QualitativeValue
 */
class QualitativeValue extends Enumeration {

    public const SCHEMA_TYPE = 'QualitativeValue';

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
     * This ordering relation for qualitative values indicates that the subject is
     * equal to the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/equal
     */
    public string|array|null $equal = null;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/greater
     */
    public string|array|null $greater = null;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than or equal to the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/greaterOrEqual
     */
    public string|array|null $greaterOrEqual = null;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/lesser
     */
    public string|array|null $lesser = null;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than or equal to the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/lesserOrEqual
     */
    public string|array|null $lesserOrEqual = null;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * not equal to the object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/nonEqual
     */
    public string|array|null $nonEqual = null;

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
