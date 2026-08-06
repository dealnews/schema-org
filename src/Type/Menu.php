<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Menu.
 *
 * A structured representation of food or drink items available from a
 * FoodEstablishment.
 *
 * @see https://schema.org/Menu
 */
class Menu extends CreativeWork {

    public const SCHEMA_TYPE = 'Menu';

    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @var MenuItem|MenuItem[]|null
     *
     * @see https://schema.org/hasMenuItem
     */
    public MenuItem|array|null $hasMenuItem = null;

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @var MenuSection|MenuSection[]|null
     *
     * @see https://schema.org/hasMenuSection
     */
    public MenuSection|array|null $hasMenuSection = null;
}
