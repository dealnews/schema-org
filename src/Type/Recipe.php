<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Recipe.
 *
 * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via [[suitableForDiet]]. The [[keywords]]
 * property can also be used to add more detail.
 *
 * @see https://schema.org/Recipe
 */
class Recipe extends HowTo {

    public const SCHEMA_TYPE = 'Recipe';

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/cookTime
     */
    public string|array|null $cookTime = null;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/cookingMethod
     */
    public string|array|null $cookingMethod = null;

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @var NutritionInformation|NutritionInformation[]|null
     *
     * @see https://schema.org/nutrition
     */
    public NutritionInformation|array|null $nutrition = null;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/recipeCategory
     */
    public string|array|null $recipeCategory = null;

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/recipeCuisine
     */
    public string|array|null $recipeCuisine = null;

    /**
     * An ingredient or ordered list of ingredients and potentially quantities used
     * in the recipe, e.g. 1 cup of sugar, flour or garlic.  The ingredients can be
     * represented as free text or more structured values.
     *
     * @var ItemList|PropertyValue|string|ItemList[]|PropertyValue[]|string[]|null
     *
     * @see https://schema.org/recipeIngredient
     */
    public ItemList|PropertyValue|string|array|null $recipeIngredient = null;

    /**
     * A step in making the recipe, in the form of a single item (document, video,
     * etc.) or an ordered list with HowToStep and/or HowToSection items.
     *
     * @var CreativeWork|ItemList|string|CreativeWork[]|ItemList[]|string[]|null
     *
     * @see https://schema.org/recipeInstructions
     */
    public CreativeWork|ItemList|string|array|null $recipeInstructions = null;

    /**
     * The quantity produced by the recipe (for example, number of people served,
     * number of servings, etc).
     *
     * @var QuantitativeValue|string|QuantitativeValue[]|string[]|null
     *
     * @see https://schema.org/recipeYield
     */
    public QuantitativeValue|string|array|null $recipeYield = null;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu
     * item is suitable, e.g. diabetic, halal etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/suitableForDiet
     */
    public string|array|null $suitableForDiet = null;
}
