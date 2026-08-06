<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CookAction.
 *
 * The act of producing/preparing food.
 *
 * @see https://schema.org/CookAction
 */
class CookAction extends CreateAction {

    public const SCHEMA_TYPE = 'CookAction';

    /**
     * A sub property of location. The specific food establishment where the action
     * occurred.
     *
     * @var FoodEstablishment|Place|FoodEstablishment[]|Place[]|null
     *
     * @see https://schema.org/foodEstablishment
     */
    public FoodEstablishment|Place|array|null $foodEstablishment = null;

    /**
     * A sub property of location. The specific food event where the action
     * occurred.
     *
     * @var FoodEvent|FoodEvent[]|null
     *
     * @see https://schema.org/foodEvent
     */
    public FoodEvent|array|null $foodEvent = null;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the
     * action.
     *
     * @var Recipe|Recipe[]|null
     *
     * @see https://schema.org/recipe
     */
    public Recipe|array|null $recipe = null;
}
