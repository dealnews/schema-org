<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ListItem.
 *
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see https://schema.org/ListItem
 */
class ListItem extends Intangible {

    public const SCHEMA_TYPE = 'ListItem';

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist'
     * in a list of 'artists').
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/item
     */
    public Thing|array|null $item = null;

    /**
     * A link to the ListItem that follows the current one.
     *
     * @var ListItem|ListItem[]|null
     *
     * @see https://schema.org/nextItem
     */
    public ListItem|array|null $nextItem = null;

    /**
     * The position of an item in a series or sequence of items.
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/position
     */
    public int|string|array|null $position = null;

    /**
     * A link to the ListItem that precedes the current one.
     *
     * @var ListItem|ListItem[]|null
     *
     * @see https://schema.org/previousItem
     */
    public ListItem|array|null $previousItem = null;
}
