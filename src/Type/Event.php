<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Event.
 *
 * An event happening at a certain time and location, such as a concert,
 * lecture, or festival. Ticketing information may be added via the [[offers]]
 * property. Repeated events may be structured as separate Event objects.
 *
 * @see https://schema.org/Event
 */
class Event extends Thing {

    public const SCHEMA_TYPE = 'Event';

    /**
     * The subject matter of an object.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/about
     */
    public Thing|array|null $about = null;

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games
     * etc., or in an event. Actors can be associated with individual items or with
     * a series, episode, clip.
     *
     * @var PerformingGroup|Person|array|null
     *
     * @see https://schema.org/actor
     */
    public PerformingGroup|Person|array|null $actor = null;

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
     * A person or organization attending the event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/attendee
     */
    public Organization|Person|array|null $attendee = null;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|array|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

    /**
     * The person or organization who wrote a composition, or who is the composer
     * of a work performed at some event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/composer
     */
    public Organization|Person|array|null $composer = null;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/contributor
     */
    public Organization|Person|array|null $contributor = null;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/director
     */
    public Person|array|null $director = null;

    /**
     * The time admission will commence.
     *
     * @var string|array|null
     *
     * @see https://schema.org/doorTime
     */
    public string|array|null $doorTime = null;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|QuantitativeValue|array|null
     *
     * @see https://schema.org/duration
     */
    public string|QuantitativeValue|array|null $duration = null;

    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|array|null
     *
     * @see https://schema.org/endDate
     */
    public string|array|null $endDate = null;

    /**
     * An eventStatus of an event represents its status; particularly useful when
     * an event is cancelled or rescheduled.
     *
     * @var string|array|null
     *
     * @see https://schema.org/eventStatus
     */
    public string|array|null $eventStatus = null;

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/funder
     */
    public Organization|Person|array|null $funder = null;

    /**
     * The language of the content or performance or used in an action. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @var Language|string|array|null
     *
     * @see https://schema.org/inLanguage
     */
    public Language|string|array|null $inLanguage = null;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public bool|array|null $isAccessibleForFree = null;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @var string|array|null
     *
     * @see https://schema.org/keywords
     */
    public string|array|null $keywords = null;

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @var Place|PostalAddress|string|array|null
     *
     * @see https://schema.org/location
     */
    public Place|PostalAddress|string|array|null $location = null;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @var int|array|null
     *
     * @see https://schema.org/maximumAttendeeCapacity
     */
    public int|array|null $maximumAttendeeCapacity = null;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets to
     * an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to describe a
     * [[Demand]]. While this property is listed as expected on a number of common
     * types, it can be used in others. In that case, using a second type, such as
     * Product or a subtype of Product, can clarify the nature of the offer.
     *
     * @var Demand|Offer|array|null
     *
     * @see https://schema.org/offers
     */
    public Demand|Offer|array|null $offers = null;

    /**
     * An organizer of an Event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/organizer
     */
    public Organization|Person|array|null $organizer = null;

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical
     * group or actor.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/performer
     */
    public Organization|Person|array|null $performer = null;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events.
     * This property contains the previously scheduled start date. For rescheduled
     * events, the startDate property should be used for the newly scheduled start
     * date. In the (rare) case of an event that has been postponed and rescheduled
     * multiple times, this field may be repeated.
     *
     * @var string|array|null
     *
     * @see https://schema.org/previousStartDate
     */
    public string|array|null $previousStartDate = null;

    /**
     * The CreativeWork that captured all or part of this Event.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/recordedIn
     */
    public CreativeWork|array|null $recordedIn = null;

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @var int|array|null
     *
     * @see https://schema.org/remainingAttendeeCapacity
     */
    public int|array|null $remainingAttendeeCapacity = null;

    /**
     * A review of the item.
     *
     * @var Review|array|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate
     * sponsor of an event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/sponsor
     */
    public Organization|Person|array|null $sponsor = null;

    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @var string|array|null
     *
     * @see https://schema.org/startDate
     */
    public string|array|null $startDate = null;

    /**
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each of which is a subEvent of the conference.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/subEvent
     */
    public Event|array|null $subEvent = null;

    /**
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as their
     * superEvent.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/superEvent
     */
    public Event|array|null $superEvent = null;

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/translator
     */
    public Organization|Person|array|null $translator = null;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/typicalAgeRange
     */
    public string|array|null $typicalAgeRange = null;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a play),
     * or a workPresented (a Movie at a ScreeningEvent).
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/workFeatured
     */
    public CreativeWork|array|null $workFeatured = null;

    /**
     * A work performed in some event, for example a play performed in a
     * TheaterEvent.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/workPerformed
     */
    public CreativeWork|array|null $workPerformed = null;
}
