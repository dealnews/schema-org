<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PropertyValueSpecification.
 *
 * A Property value specification.
 *
 * @see https://schema.org/PropertyValueSpecification
 */
class PropertyValueSpecification extends Intangible {

    public const SCHEMA_TYPE = 'PropertyValueSpecification';

    /**
     * The default value of the input.  For properties that expect a literal, the
     * default is a literal value, for properties that expect an object, it's an ID
     * reference to one of the current values.
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/defaultValue
     */
    public string|Thing|array|null $defaultValue = null;

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
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/multipleValues
     */
    public bool|array|null $multipleValues = null;

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for
     * a property that also has a value makes it act similar to a "hidden" input in
     * an HTML form.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/readonlyValue
     */
    public bool|array|null $readonlyValue = null;

    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/stepValue
     */
    public int|float|array|null $stepValue = null;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/valueMaxLength
     */
    public int|float|array|null $valueMaxLength = null;

    /**
     * Specifies the minimum allowed range for number of characters in a literal
     * value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/valueMinLength
     */
    public int|float|array|null $valueMinLength = null;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL
     * templates and form encoding in a manner analogous to HTML's input@name.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/valueName
     */
    public string|array|null $valueName = null;

    /**
     * Specifies a regular expression for testing literal values according to the
     * HTML spec.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/valuePattern
     */
    public string|array|null $valuePattern = null;

    /**
     * Whether the property must be filled in to complete the action.  Default is
     * false.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/valueRequired
     */
    public bool|array|null $valueRequired = null;
}
