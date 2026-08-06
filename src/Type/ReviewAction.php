<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReviewAction.
 *
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 *
 * @see https://schema.org/ReviewAction
 */
class ReviewAction extends AssessAction {

    public const SCHEMA_TYPE = 'ReviewAction';

    /**
     * A sub property of result. The review that resulted in the performing of the
     * action.
     *
     * @var Review|Review[]|null
     *
     * @see https://schema.org/resultReview
     */
    public Review|array|null $resultReview = null;
}
