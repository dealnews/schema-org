<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Rating.
 *
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 *
 * @see https://schema.org/Rating
 */
class Rating extends Intangible {

    public const SCHEMA_TYPE = 'Rating';

    /**
     * The author of this content or rating. Please note that author is special in
     * that HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/author
     */
    public Organization|Person|array|null $author = null;

    /**
     * The highest value allowed in this rating system.
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/bestRating
     */
    public int|float|string|array|null $bestRating = null;

    /**
     * The rating for the content.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/ratingValue
     */
    public int|float|string|array|null $ratingValue = null;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     * @var StructuredValue|string|array|null
     *
     * @see https://schema.org/reviewAspect
     */
    public StructuredValue|string|array|null $reviewAspect = null;

    /**
     * The lowest value allowed in this rating system.
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/worstRating
     */
    public int|float|string|array|null $worstRating = null;
}
