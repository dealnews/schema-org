<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Trip.
 *
 * A trip or journey. An itinerary of visits to one or more places.
 *
 * @see https://schema.org/Trip
 */
class Trip extends Intangible {

    public const SCHEMA_TYPE = 'Trip';

    /**
     * The expected arrival time.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/arrivalTime
     */
    public string|array|null $arrivalTime = null;

    /**
     * The expected departure time.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/departureTime
     */
    public string|array|null $departureTime = null;

    /**
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event. Use [[businessFunction]] to indicate the kind of transaction offered,
     * i.e. sell, lease, etc. This property can also be used to describe a
     * [[Demand]]. While this property is listed as expected on a number of common
     * types, it can be used in others. In that case, using a second type, such as
     * Product or a subtype of Product, can clarify the nature of the offer.
     *
     * @var Demand|Offer|Demand[]|Offer[]|null
     *
     * @see https://schema.org/offers
     */
    public Demand|Offer|array|null $offers = null;

    /**
     * The location of origin of the trip, prior to any destination(s).
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/tripOrigin
     */
    public Place|array|null $tripOrigin = null;
}
