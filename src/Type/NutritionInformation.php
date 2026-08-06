<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * NutritionInformation.
 *
 * Nutritional information about the recipe.
 *
 * @see https://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue {

    public const SCHEMA_TYPE = 'NutritionInformation';

    /**
     * The number of calories.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/calories
     */
    public string|array|null $calories = null;

    /**
     * The number of grams of carbohydrates.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/carbohydrateContent
     */
    public string|array|null $carbohydrateContent = null;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/cholesterolContent
     */
    public string|array|null $cholesterolContent = null;

    /**
     * The number of grams of fat.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/fatContent
     */
    public string|array|null $fatContent = null;

    /**
     * The number of grams of fiber.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/fiberContent
     */
    public string|array|null $fiberContent = null;

    /**
     * The number of grams of protein.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/proteinContent
     */
    public string|array|null $proteinContent = null;

    /**
     * The number of grams of saturated fat.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/saturatedFatContent
     */
    public string|array|null $saturatedFatContent = null;

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/servingSize
     */
    public string|array|null $servingSize = null;

    /**
     * The number of milligrams of sodium.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/sodiumContent
     */
    public string|array|null $sodiumContent = null;

    /**
     * The number of grams of sugar.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/sugarContent
     */
    public string|array|null $sugarContent = null;

    /**
     * The number of grams of trans fat.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/transFatContent
     */
    public string|array|null $transFatContent = null;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/unsaturatedFatContent
     */
    public string|array|null $unsaturatedFatContent = null;
}
