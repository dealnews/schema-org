<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Place.
 *
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see https://schema.org/Place
 */
class Place extends Thing {

    public const SCHEMA_TYPE = 'Place';

    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @var PropertyValue|PropertyValue[]|null
     *
     * @see https://schema.org/additionalProperty
     */
    public PropertyValue|array|null $additionalProperty = null;

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string|PostalAddress[]|string[]|null
     *
     * @see https://schema.org/address
     */
    public PostalAddress|string|array|null $address = null;

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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation.
     * This generic property does not make a statement about whether the feature is
     * included in an offer for the main accommodation or available at extra costs.
     *
     * @var LocationFeatureSpecification|LocationFeatureSpecification[]|null
     *
     * @see https://schema.org/amenityFeature
     */
    public LocationFeatureSpecification|array|null $amenityFeature = null;

    /**
     * A short textual code (also called "store code") that uniquely identifies a
     * place of business. The code is typically assigned by the parentOrganization
     * and used in structured URLs.
     *
     * For example, in the URL
     * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is
     * a branchCode for a particular branch.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/branchCode
     */
    public string|array|null $branchCode = null;

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/containedInPlace
     */
    public Place|array|null $containedInPlace = null;

    /**
     * The basic containment relation between a place and another that it contains.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/containsPlace
     */
    public Place|array|null $containsPlace = null;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;

    /**
     * The fax number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/faxNumber
     */
    public string|array|null $faxNumber = null;

    /**
     * The geo coordinates of the place.
     *
     * @var GeoCoordinates|GeoShape|GeoCoordinates[]|GeoShape[]|null
     *
     * @see https://schema.org/geo
     */
    public GeoCoordinates|GeoShape|array|null $geo = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a containing geometry to a contained geometry. "a
     * contains b iff no points of b lie in the exterior of a, and at least one
     * point of the interior of b lies in the interior of a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoContains
     */
    public string|Place|array|null $geoContains = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that covers it. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoCoveredBy
     */
    public string|Place|array|null $geoCoveredBy = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a covering geometry to a covered geometry. "Every point
     * of b is a point of (the interior or boundary of) a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoCovers
     */
    public string|Place|array|null $geoCovers = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that crosses it: "a crosses b:
     * they have some but not all interior points in common, and the dimension of
     * the intersection is less than that of at least one of them". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoCrosses
     */
    public string|Place|array|null $geoCrosses = null;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: "they have no point in common. They
     * form a set of disconnected geometries." (A symmetric relationship, as
     * defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoDisjoint
     */
    public string|Place|array|null $geoDisjoint = null;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
     * topologically equal if their interiors intersect and no part of the interior
     * or boundary of one geometry intersects the exterior of the other" (a
     * symmetric relationship).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoEquals
     */
    public string|Place|array|null $geoEquals = null;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoIntersects
     */
    public string|Place|array|null $geoIntersects = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that geospatially overlaps it,
     * i.e. they have some but not all points in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoOverlaps
     */
    public string|Place|array|null $geoOverlaps = null;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: "they have at least one boundary point in common, but no
     * interior points." (A symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoTouches
     */
    public string|Place|array|null $geoTouches = null;

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to one that contains it, i.e. it is inside
     * (i.e. within) its interior. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @var string|Place|string[]|Place[]|null
     *
     * @see https://schema.org/geoWithin
     */
    public string|Place|array|null $geoWithin = null;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/globalLocationNumber
     */
    public string|array|null $globalLocationNumber = null;

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
     * A URL to a map of the place.
     *
     * @var Map|string|Map[]|string[]|null
     *
     * @see https://schema.org/hasMap
     */
    public Map|string|array|null $hasMap = null;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public bool|array|null $isAccessibleForFree = null;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/isicV4
     */
    public string|array|null $isicV4 = null;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/keywords
     */
    public string|array|null $keywords = null;

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @var int|float|string|int[]|float[]|string[]|null
     *
     * @see https://schema.org/latitude
     */
    public int|float|string|array|null $latitude = null;

    /**
     * An associated logo.
     *
     * @var ImageObject|string|ImageObject[]|string[]|null
     *
     * @see https://schema.org/logo
     */
    public ImageObject|string|array|null $logo = null;

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @var int|float|string|int[]|float[]|string[]|null
     *
     * @see https://schema.org/longitude
     */
    public int|float|string|array|null $longitude = null;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/maximumAttendeeCapacity
     */
    public int|array|null $maximumAttendeeCapacity = null;

    /**
     * The opening hours of a certain place.
     *
     * @var OpeningHoursSpecification|OpeningHoursSpecification[]|null
     *
     * @see https://schema.org/openingHoursSpecification
     */
    public OpeningHoursSpecification|array|null $openingHoursSpecification = null;

    /**
     * A photograph of this place.
     *
     * @var ImageObject|Photograph|ImageObject[]|Photograph[]|null
     *
     * @see https://schema.org/photo
     */
    public ImageObject|Photograph|array|null $photo = null;

    /**
     * A flag to signal that the [[Place]] is open to public visitors.  If this
     * property is omitted there is no assumed default boolean value.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/publicAccess
     */
    public bool|array|null $publicAccess = null;

    /**
     * A review of the item.
     *
     * @var Review|Review[]|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/slogan
     */
    public string|array|null $slogan = null;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the
     * restaurant, hotel or hotel room.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/smokingAllowed
     */
    public bool|array|null $smokingAllowed = null;

    /**
     * The special opening hours of a certain place.
     *
     * Use this to explicitly override general opening hours brought in scope by
     * [[openingHoursSpecification]] or [[openingHours]].
     *
     * @var OpeningHoursSpecification|OpeningHoursSpecification[]|null
     *
     * @see https://schema.org/specialOpeningHoursSpecification
     */
    public OpeningHoursSpecification|array|null $specialOpeningHoursSpecification = null;

    /**
     * The telephone number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/telephone
     */
    public string|array|null $telephone = null;
}
