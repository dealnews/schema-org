<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowTo.
 *
 * Instructions that explain how to achieve a result by performing a sequence
 * of steps.
 *
 * @see https://schema.org/HowTo
 */
class HowTo extends CreativeWork {

    public const SCHEMA_TYPE = 'HowTo';

    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @var MonetaryAmount|string|array|null
     *
     * @see https://schema.org/estimatedCost
     */
    public MonetaryAmount|string|array|null $estimatedCost = null;

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/performTime
     */
    public string|array|null $performTime = null;

    /**
     * The length of time it takes to prepare the items to be used in instructions
     * or a direction, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/prepTime
     */
    public string|array|null $prepTime = null;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection.
     *
     * @var CreativeWork|HowToSection|HowToStep|string|array|null
     *
     * @see https://schema.org/step
     */
    public CreativeWork|HowToSection|HowToStep|string|array|null $step = null;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions
     * or a direction.
     *
     * @var HowToSupply|string|array|null
     *
     * @see https://schema.org/supply
     */
    public HowToSupply|string|array|null $supply = null;

    /**
     * A sub property of instrument. An object used (but not consumed) when
     * performing instructions or a direction.
     *
     * @var HowToTool|string|array|null
     *
     * @see https://schema.org/tool
     */
    public HowToTool|string|array|null $tool = null;

    /**
     * The total time required to perform instructions or a direction (including
     * time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/totalTime
     */
    public string|array|null $totalTime = null;

    /**
     * The quantity that results by performing instructions. For example, a paper
     * airplane, 10 personalized candles.
     *
     * @var QuantitativeValue|string|array|null
     *
     * @see https://schema.org/yield
     */
    public QuantitativeValue|string|array|null $yield = null;
}
