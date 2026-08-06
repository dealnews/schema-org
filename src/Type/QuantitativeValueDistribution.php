<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * QuantitativeValueDistribution.
 *
 * A statistical distribution of values.
 *
 * @see https://schema.org/QuantitativeValueDistribution
 */
class QuantitativeValueDistribution extends StructuredValue {

    public const SCHEMA_TYPE = 'QuantitativeValueDistribution';

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/duration
     */
    public string|QuantitativeValue|array|null $duration = null;

    /**
     * The median value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/median
     */
    public int|float|array|null $median = null;

    /**
     * The 10th percentile value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/percentile10
     */
    public int|float|array|null $percentile10 = null;

    /**
     * The 25th percentile value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/percentile25
     */
    public int|float|array|null $percentile25 = null;

    /**
     * The 75th percentile value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/percentile75
     */
    public int|float|array|null $percentile75 = null;

    /**
     * The 90th percentile value.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/percentile90
     */
    public int|float|array|null $percentile90 = null;
}
