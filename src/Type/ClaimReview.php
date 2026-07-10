<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ClaimReview.
 *
 * A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
 *
 * @see https://schema.org/ClaimReview
 */
class ClaimReview extends Review {

    public const SCHEMA_TYPE = 'ClaimReview';

    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     *
     * @var string|array|null
     *
     * @see https://schema.org/claimReviewed
     */
    public string|array|null $claimReviewed = null;
}
