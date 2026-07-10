<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Brand.
 *
 * A brand is a name used by an organization or business person for labeling a
 * product, product group, or similar.
 *
 * @see https://schema.org/Brand
 */
class Brand extends Intangible {

    public const SCHEMA_TYPE = 'Brand';

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating|array|null
     *
     * @see https://schema.org/aggregateRating
     */
    public AggregateRating|array|null $aggregateRating = null;

    /**
     * An associated logo.
     *
     * @var ImageObject|string|array|null
     *
     * @see https://schema.org/logo
     */
    public ImageObject|string|array|null $logo = null;

    /**
     * A review of the item.
     *
     * @var Review|array|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|array|null
     *
     * @see https://schema.org/slogan
     */
    public string|array|null $slogan = null;
}
