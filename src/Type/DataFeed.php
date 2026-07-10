<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DataFeed.
 *
 * A single feed providing structured information about one or more entities or
 * topics.
 *
 * @see https://schema.org/DataFeed
 */
class DataFeed extends Dataset {

    public const SCHEMA_TYPE = 'DataFeed';

    /**
     * An item within a data feed. Data feeds may have many elements.
     *
     * @var DataFeedItem|string|Thing|array|null
     *
     * @see https://schema.org/dataFeedElement
     */
    public DataFeedItem|string|Thing|array|null $dataFeedElement = null;
}
