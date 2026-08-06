<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MenuItem.
 *
 * A food or drink item listed in a menu or menu section.
 *
 * @see https://schema.org/MenuItem
 */
class MenuItem extends Intangible {

    public const SCHEMA_TYPE = 'MenuItem';

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries
     * that can be added to this menu item. Additionally it can be a menu section
     * containing allowed add-on menu items for this menu item.
     *
     * @var MenuItem|MenuSection|MenuItem[]|MenuSection[]|null
     *
     * @see https://schema.org/menuAddOn
     */
    public MenuItem|MenuSection|array|null $menuAddOn = null;

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @var NutritionInformation|NutritionInformation[]|null
     *
     * @see https://schema.org/nutrition
     */
    public NutritionInformation|array|null $nutrition = null;

    /**
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event. Use [[businessFunction]] to indicate the kind of transaction offered,
     * i.e. sell, lease, etc. This property can also be used to describe a
     * [[Demand]]. While this property is listed as expected on a number of common
     * types, it can be used in others. In that case, using a second type, such as
     * Product or a subtype of Product, can clarify the nature of the offer.
     *
     * @var Demand|Offer|Demand[]|Offer[]|null
     *
     * @see https://schema.org/offers
     */
    public Demand|Offer|array|null $offers = null;

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
