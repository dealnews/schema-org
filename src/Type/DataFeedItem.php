<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DataFeedItem.
 *
 * A single item within a larger data feed.
 *
 * @see https://schema.org/DataFeedItem
 */
class DataFeedItem extends Intangible {

    public const SCHEMA_TYPE = 'DataFeedItem';

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateCreated
     */
    public string|array|null $dateCreated = null;

    /**
     * The datetime the item was removed from the DataFeed.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateDeleted
     */
    public string|array|null $dateDeleted = null;

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateModified
     */
    public string|array|null $dateModified = null;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist'
     * in a list of 'artists').
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/item
     */
    public Thing|array|null $item = null;
}
