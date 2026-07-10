<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MenuSection.
 *
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as
 * 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat',
 * 'Vegan', 'Drinks', etc.), or some other classification made by the menu
 * provider.
 *
 * @see https://schema.org/MenuSection
 */
class MenuSection extends CreativeWork {

    public const SCHEMA_TYPE = 'MenuSection';

    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @var MenuItem|array|null
     *
     * @see https://schema.org/hasMenuItem
     */
    public MenuItem|array|null $hasMenuItem = null;

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @var MenuSection|array|null
     *
     * @see https://schema.org/hasMenuSection
     */
    public MenuSection|array|null $hasMenuSection = null;
}
