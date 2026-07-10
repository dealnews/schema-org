<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowToSection.
 *
 * A sub-grouping of steps in the instructions for how to achieve a result
 * (e.g. steps for making a pie crust within a pie recipe).
 *
 * @see https://schema.org/HowToSection
 */
class HowToSection extends CreativeWork {

    public const SCHEMA_TYPE = 'HowToSection';

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist'
     * in a list of 'artists').
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/item
     */
    public Thing|array|null $item = null;

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter",
     * "Paul", "Mary"), existing entities, or use ListItem.
     *
     * Text values are best if the elements in the list are plain strings. Existing
     * entities are best for a simple, unordered list of existing things in your
     * data. ListItem is used with ordered lists when you want to provide
     * additional context about the element in that list or when the same item
     * might be in different places in different lists.
     *
     * Note: The order of elements in your mark-up is not sufficient for indicating
     * the order or elements.  Use ListItem with a 'position' property in such
     * cases.
     *
     * @var ListItem|string|Thing|array|null
     *
     * @see https://schema.org/itemListElement
     */
    public ListItem|string|Thing|array|null $itemListElement = null;

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @var string|array|null
     *
     * @see https://schema.org/itemListOrder
     */
    public string|array|null $itemListOrder = null;

    /**
     * A link to the ListItem that follows the current one.
     *
     * @var ListItem|array|null
     *
     * @see https://schema.org/nextItem
     */
    public ListItem|array|null $nextItem = null;

    /**
     * The number of items in an ItemList. Note that some descriptions might not
     * fully describe all items in a list (e.g., multi-page pagination); in such
     * cases, the numberOfItems would be for the entire list.
     *
     * @var int|array|null
     *
     * @see https://schema.org/numberOfItems
     */
    public int|array|null $numberOfItems = null;

    /**
     * A link to the ListItem that precedes the current one.
     *
     * @var ListItem|array|null
     *
     * @see https://schema.org/previousItem
     */
    public ListItem|array|null $previousItem = null;
}
