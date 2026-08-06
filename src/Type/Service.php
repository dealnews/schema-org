<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Service.
 *
 * A service provided by an organization, e.g. delivery service, print
 * services, etc.
 *
 * @see https://schema.org/Service
 */
class Service extends Intangible {

    public const SCHEMA_TYPE = 'Service';

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating|AggregateRating[]|null
     *
     * @see https://schema.org/aggregateRating
     */
    public AggregateRating|array|null $aggregateRating = null;

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @var AdministrativeArea|GeoShape|Place|string|AdministrativeArea[]|GeoShape[]|Place[]|string[]|null
     *
     * @see https://schema.org/areaServed
     */
    public AdministrativeArea|GeoShape|Place|string|array|null $areaServed = null;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|Audience[]|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location,
     * etc.).
     *
     * @var ServiceChannel|ServiceChannel[]|null
     *
     * @see https://schema.org/availableChannel
     */
    public ServiceChannel|array|null $availableChannel = null;

    /**
     * An award won by or for this item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/award
     */
    public string|array|null $award = null;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @var Brand|Organization|Brand[]|Organization[]|null
     *
     * @see https://schema.org/brand
     */
    public Brand|Organization|array|null $brand = null;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/broker
     */
    public Organization|Person|array|null $broker = null;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/category
     */
    public string|Thing|array|null $category = null;

    /**
     * Certification information about a product, organization, service, place, or
     * person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/hasCertification
     */
    public string|array|null $hasCertification = null;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog|OfferCatalog[]|null
     *
     * @see https://schema.org/hasOfferCatalog
     */
    public OfferCatalog|array|null $hasOfferCatalog = null;

    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification|OpeningHoursSpecification[]|null
     *
     * @see https://schema.org/hoursAvailable
     */
    public OpeningHoursSpecification|array|null $hoursAvailable = null;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product|Service|Product[]|Service[]|null
     *
     * @see https://schema.org/isRelatedTo
     */
    public Product|Service|array|null $isRelatedTo = null;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product|Service|Product[]|Service[]|null
     *
     * @see https://schema.org/isSimilarTo
     */
    public Product|Service|array|null $isSimilarTo = null;

    /**
     * An associated logo.
     *
     * @var ImageObject|string|ImageObject[]|string[]|null
     *
     * @see https://schema.org/logo
     */
    public ImageObject|string|array|null $logo = null;

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
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/providerMobility
     */
    public string|array|null $providerMobility = null;

    /**
     * A review of the item.
     *
     * @var Review|Review[]|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/serviceOutput
     */
    public Thing|array|null $serviceOutput = null;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency
     * relief, etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/serviceType
     */
    public string|array|null $serviceType = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/slogan
     */
    public string|array|null $slogan = null;
}
