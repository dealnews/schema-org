<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ActionAccessSpecification.
 *
 * A set of requirements that must be fulfilled in order to perform an Action.
 *
 * @see https://schema.org/ActionAccessSpecification
 */
class ActionAccessSpecification extends Intangible {

    public const SCHEMA_TYPE = 'ActionAccessSpecification';

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var string|array|null
     *
     * @see https://schema.org/availabilityEnds
     */
    public string|array|null $availabilityEnds = null;

    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     *
     * @var string|array|null
     *
     * @see https://schema.org/availabilityStarts
     */
    public string|array|null $availabilityStarts = null;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|Thing|array|null
     *
     * @see https://schema.org/category
     */
    public string|Thing|array|null $category = null;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     *
     * See also [[ineligibleRegion]].
     *
     * @var GeoShape|Place|string|array|null
     *
     * @see https://schema.org/eligibleRegion
     */
    public GeoShape|Place|string|array|null $eligibleRegion = null;

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer|array|null
     *
     * @see https://schema.org/expectsAcceptanceOf
     */
    public Offer|array|null $expectsAcceptanceOf = null;

    /**
     * Indicates if use of the media require a subscription  (either paid or free).
     * Allowed values are ```true``` or ```false``` (note that an earlier version
     * had 'yes', 'no').
     *
     * @var bool|MediaSubscription|array|null
     *
     * @see https://schema.org/requiresSubscription
     */
    public bool|MediaSubscription|array|null $requiresSubscription = null;
}
