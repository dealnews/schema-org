<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AggregateRating.
 *
 * The average rating based on multiple ratings or reviews.
 *
 * @see https://schema.org/AggregateRating
 */
class AggregateRating extends Rating {

    public const SCHEMA_TYPE = 'AggregateRating';

    /**
     * The item that is being reviewed/rated.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/itemReviewed
     */
    public Thing|array|null $itemReviewed = null;

    /**
     * The count of total number of ratings.
     *
     * @var int|array|null
     *
     * @see https://schema.org/ratingCount
     */
    public int|array|null $ratingCount = null;

    /**
     * The count of total number of reviews.
     *
     * @var int|array|null
     *
     * @see https://schema.org/reviewCount
     */
    public int|array|null $reviewCount = null;
}
