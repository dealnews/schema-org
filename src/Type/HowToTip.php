<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowToTip.
 *
 * An explanation in the instructions for how to achieve a result. It provides
 * supplementary information about a technique, supply, author's preference,
 * etc. It can explain what could be done, or what should not be done, but
 * doesn't specify what should be done (see HowToDirection).
 *
 * @see https://schema.org/HowToTip
 */
class HowToTip extends CreativeWork {

    public const SCHEMA_TYPE = 'HowToTip';

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
     * A link to the ListItem that precedes the current one.
     *
     * @var ListItem|ListItem[]|null
     *
     * @see https://schema.org/previousItem
     */
    public ListItem|array|null $previousItem = null;
}
