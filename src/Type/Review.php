<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Review.
 *
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @see https://schema.org/Review
 */
class Review extends CreativeWork {

    public const SCHEMA_TYPE = 'Review';

    /**
     * The item that is being reviewed/rated.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/itemReviewed
     */
    public Thing|array|null $itemReviewed = null;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     * @var StructuredValue|string|array|null
     *
     * @see https://schema.org/reviewAspect
     */
    public StructuredValue|string|array|null $reviewAspect = null;

    /**
     * The actual body of the review.
     *
     * @var string|array|null
     *
     * @see https://schema.org/reviewBody
     */
    public string|array|null $reviewBody = null;

    /**
     * The rating given in this review. Note that reviews can themselves be rated.
     * The ```reviewRating``` applies to rating given by the review. The
     * [[aggregateRating]] property applies to the review itself, as a creative
     * work.
     *
     * @var Rating|array|null
     *
     * @see https://schema.org/reviewRating
     */
    public Rating|array|null $reviewRating = null;
}
