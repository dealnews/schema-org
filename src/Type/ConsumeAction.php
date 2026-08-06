<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ConsumeAction.
 *
 * The act of ingesting information/resources/food.
 *
 * @see https://schema.org/ConsumeAction
 */
class ConsumeAction extends Action {

    public const SCHEMA_TYPE = 'ConsumeAction';

    /**
     * A set of requirements that must be fulfilled in order to perform an Action.
     * If more than one value is specified, fulfilling one set of requirements will
     * allow the Action to be performed.
     *
     * @var ActionAccessSpecification|ActionAccessSpecification[]|null
     *
     * @see https://schema.org/actionAccessibilityRequirement
     */
    public ActionAccessSpecification|array|null $actionAccessibilityRequirement = null;

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer|Offer[]|null
     *
     * @see https://schema.org/expectsAcceptanceOf
     */
    public Offer|array|null $expectsAcceptanceOf = null;
}
