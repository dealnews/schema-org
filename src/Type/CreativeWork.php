<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CreativeWork.
 *
 * The most generic kind of creative work, including books, movies,
 * photographs, software programs, etc.
 *
 * @see https://schema.org/CreativeWork
 */
class CreativeWork extends Thing {

    public const SCHEMA_TYPE = 'CreativeWork';

    /**
     * The subject matter of an object.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/about
     */
    public Thing|array|null $about = null;

    /**
     * The human sensory perceptual system or cognitive faculty through which a
     * person may process or perceive the intellectual content of a resource, not
     * including any adaptations of the content (e.g., text alternatives for
     * images). Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessMode
     */
    public string|array|null $accessMode = null;

    /**
     * A list of single or combined access modes that are sufficient to understand
     * all the intellectual content of a resource, including any adaptations.
     * Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     *
     * @var ItemList|ItemList[]|null
     *
     * @see https://schema.org/accessModeSufficient
     */
    public ItemList|array|null $accessModeSufficient = null;

    /**
     * Indicates that the resource is compatible with the referenced accessibility
     * API. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessibilityAPI
     */
    public string|array|null $accessibilityAPI = null;

    /**
     * Identifies input methods that are sufficient to fully control the described
     * resource. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessibilityControl
     */
    public string|array|null $accessibilityControl = null;

    /**
     * Content features of the resource, such as accessible media, alternatives and
     * supported enhancements for accessibility. Values should be drawn from the
     * [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessibilityFeature
     */
    public string|array|null $accessibilityFeature = null;

    /**
     * A characteristic of the described resource that is physiologically dangerous
     * to some users. Related to WCAG 2.0 guideline 2.3. Values should be drawn
     * from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessibilityHazard
     */
    public string|array|null $accessibilityHazard = null;

    /**
     * A human-readable summary of specific accessibility features or deficiencies,
     * consistent with the other accessibility metadata but expressing subtleties
     * such as "short descriptions are present but long descriptions will be needed
     * for non-visual users" or "short descriptions are present and no long
     * descriptions are needed".
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessibilitySummary
     */
    public string|array|null $accessibilitySummary = null;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/accountablePerson
     */
    public Person|array|null $accountablePerson = null;

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
     * A secondary title of the CreativeWork.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/alternativeHeadline
     */
    public string|array|null $alternativeHeadline = null;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @var MediaObject|MediaObject[]|null
     *
     * @see https://schema.org/associatedMedia
     */
    public MediaObject|array|null $associatedMedia = null;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|Audience[]|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

    /**
     * An embedded audio object.
     *
     * @var AudioObject|Clip|MusicRecording|AudioObject[]|Clip[]|MusicRecording[]|null
     *
     * @see https://schema.org/audio
     */
    public AudioObject|Clip|MusicRecording|array|null $audio = null;

    /**
     * The author of this content or rating. Please note that author is special in
     * that HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/author
     */
    public Organization|Person|array|null $author = null;

    /**
     * An award won by or for this item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/award
     */
    public string|array|null $award = null;

    /**
     * Fictional person connected with a creative work.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/character
     */
    public Person|array|null $character = null;

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc.
     *
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/citation
     */
    public CreativeWork|string|array|null $citation = null;

    /**
     * Comments, typically from users.
     *
     * @var Comment|Comment[]|null
     *
     * @see https://schema.org/comment
     */
    public Comment|array|null $comment = null;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer)
     * has received. This is most applicable to works published in Web sites with
     * commenting system; additional comments may exist elsewhere.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/commentCount
     */
    public int|array|null $commentCount = null;

    /**
     * The location depicted or described in the content. For example, the location
     * in a photograph or painting.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/contentLocation
     */
    public Place|array|null $contentLocation = null;

    /**
     * Official rating of a piece of content—for example, 'MPAA PG-13'.
     *
     * @var Rating|string|Rating[]|string[]|null
     *
     * @see https://schema.org/contentRating
     */
    public Rating|string|array|null $contentRating = null;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/contributor
     */
    public Organization|Person|array|null $contributor = null;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/copyrightHolder
     */
    public Organization|Person|array|null $copyrightHolder = null;

    /**
     * The year during which the claimed copyright for the CreativeWork was first
     * asserted.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/copyrightYear
     */
    public int|float|array|null $copyrightYear = null;

    /**
     * The country of origin of something, including products as well as creative
     * works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle
     * offices of the production company or individual responsible for the movie.
     * For other kinds of [[CreativeWork]] it is difficult to provide fully general
     * guidance, and properties such as [[contentLocation]] and [[locationCreated]]
     * may be more applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot be
     * fully enumerated here.
     *
     * @var Country|Country[]|null
     *
     * @see https://schema.org/countryOfOrigin
     */
    public Country|array|null $countryOfOrigin = null;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/creator
     */
    public Organization|Person|array|null $creator = null;

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateCreated
     */
    public string|array|null $dateCreated = null;

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dateModified
     */
    public string|array|null $dateModified = null;

    /**
     * Date of first publication or broadcast. For example the date a
     * [[CreativeWork]] was broadcast or a [[Certification]] was issued.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/datePublished
     */
    public string|array|null $datePublished = null;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/discussionUrl
     */
    public string|array|null $discussionUrl = null;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/editor
     */
    public Person|array|null $editor = null;

    /**
     * An alignment to an established educational framework.
     *
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     *
     * @var AlignmentObject|AlignmentObject[]|null
     *
     * @see https://schema.org/educationalAlignment
     */
    public AlignmentObject|array|null $educationalAlignment = null;

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/educationalUse
     */
    public DefinedTerm|string|array|null $educationalUse = null;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia.
     *
     * @var MediaObject|MediaObject[]|null
     *
     * @see https://schema.org/encoding
     */
    public MediaObject|array|null $encoding = null;

    /**
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and
     * [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)),
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3
     * etc.
     *
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside
     * particular [[encodingFormat]] information.
     *
     * Unregistered or niche encoding and file formats can be indicated instead via
     * the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata
     * entry.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/encodingFormat
     */
    public string|array|null $encodingFormat = null;

    /**
     * A creative work that this work is an example/instance/realization/derivation
     * of.
     *
     * @var CreativeWork|CreativeWork[]|null
     *
     * @see https://schema.org/exampleOfWork
     */
    public CreativeWork|array|null $exampleOfWork = null;

    /**
     * Date the content expires and is no longer useful or available. For example a
     * [[VideoObject]] or [[NewsArticle]] whose availability or relevance is
     * time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate
     * that it may no longer be relevant (or helpful to highlight) after some date,
     * or a [[Certification]] the validity has expired.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/expires
     */
    public string|array|null $expires = null;

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/funder
     */
    public Organization|Person|array|null $funder = null;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/genre
     */
    public DefinedTerm|string|array|null $genre = null;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork
     * (in some sense).
     *
     * @var CreativeWork|CreativeWork[]|null
     *
     * @see https://schema.org/hasPart
     */
    public CreativeWork|array|null $hasPart = null;

    /**
     * Headline of the article.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/headline
     */
    public string|array|null $headline = null;

    /**
     * The language of the content or performance or used in an action. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @var Language|string|Language[]|string[]|null
     *
     * @see https://schema.org/inLanguage
     */
    public Language|string|array|null $inLanguage = null;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @var InteractionCounter|InteractionCounter[]|null
     *
     * @see https://schema.org/interactionStatistic
     */
    public InteractionCounter|array|null $interactionStatistic = null;

    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/interactivityType
     */
    public string|array|null $interactivityType = null;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public bool|array|null $isAccessibleForFree = null;

    /**
     * A resource from which this work is derived or from which it is a
     * modification or adaptation.
     *
     * @var CreativeWork|Product|string|CreativeWork[]|Product[]|string[]|null
     *
     * @see https://schema.org/isBasedOn
     */
    public CreativeWork|Product|string|array|null $isBasedOn = null;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/isFamilyFriendly
     */
    public bool|array|null $isFamilyFriendly = null;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some
     * sense), is part of.
     *
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/isPartOf
     */
    public CreativeWork|string|array|null $isPartOf = null;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/keywords
     */
    public DefinedTerm|string|array|null $keywords = null;

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/learningResourceType
     */
    public DefinedTerm|string|array|null $learningResourceType = null;

    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/license
     */
    public CreativeWork|string|array|null $license = null;

    /**
     * The location where the CreativeWork was created, which may not be the same
     * as the location depicted in the CreativeWork.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/locationCreated
     */
    public Place|array|null $locationCreated = null;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/mainEntity
     */
    public Thing|array|null $mainEntity = null;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @var Product|string|Product[]|string[]|null
     *
     * @see https://schema.org/material
     */
    public Product|string|array|null $material = null;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/mentions
     */
    public Thing|array|null $mentions = null;

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
     * The position of an item in a series or sequence of items.
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/position
     */
    public int|string|array|null $position = null;

    /**
     * The person or organization who produced the work (e.g. music album, movie,
     * TV/radio series etc.).
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/producer
     */
    public Organization|Person|array|null $producer = null;

    /**
     * A publication event associated with the item.
     *
     * @var PublicationEvent|PublicationEvent[]|null
     *
     * @see https://schema.org/publication
     */
    public PublicationEvent|array|null $publication = null;

    /**
     * The publisher of the article in question.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/publisher
     */
    public Organization|Person|array|null $publisher = null;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual, e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When applied
     * to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the
     * party primarily responsible for the creation of the [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/publishingPrinciples
     */
    public CreativeWork|string|array|null $publishingPrinciples = null;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture
     * all or part of the event.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/recordedAt
     */
    public Event|array|null $recordedAt = null;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     * @var PublicationEvent|PublicationEvent[]|null
     *
     * @see https://schema.org/releasedEvent
     */
    public PublicationEvent|array|null $releasedEvent = null;

    /**
     * A review of the item.
     *
     * @var Review|Review[]|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some
     * CreativeWork. This property was created primarily to
     *     indicate the use of a specific schema.org release, e.g. ```10.0``` as a
     * simple string, or more explicitly via URL,
     * ```https://schema.org/docs/releases.html#v10.0```. There may be situations
     * in which other schemas might usefully be referenced this way, e.g.
     * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but
     * this has not been carefully explored in the community.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/schemaVersion
     */
    public string|array|null $schemaVersion = null;

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/sourceOrganization
     */
    public Organization|array|null $sourceOrganization = null;

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not
     * known to be appropriate.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/spatial
     */
    public Place|array|null $spatial = null;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the
     * focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather would
     * have spatialCoverage which was the place: the state of New York.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/spatialCoverage
     */
    public Place|array|null $spatialCoverage = null;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate
     * sponsor of an event.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/sponsor
     */
    public Organization|Person|array|null $sponsor = null;

    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
     * [[datePublished]]) are not known to be appropriate.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/temporal
     */
    public string|array|null $temporal = null;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content
     * applies to, i.e. that it describes, either as a DateTime or as a textual
     * string indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time
     * period in a precise notation (e.g. for a 2011 census dataset, the year 2011
     * would be written "2011/2012"). Other forms of content, e.g.
     * ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their
     * temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal
     * coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601
     * interval format format via "1939/1945".
     *
     * Open-ended date ranges can be written with ".." in place of the end date.
     * For example, "2015-11/.." indicates a range beginning in November 2015 and
     * with no specified final date. This is tentative and might be updated in
     * future when ISO 8601 is officially updated.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/temporalCoverage
     */
    public string|array|null $temporalCoverage = null;

    /**
     * The textual content of this CreativeWork.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/text
     */
    public string|array|null $text = null;

    /**
     * Thumbnail image for an image or video.
     *
     * @var ImageObject|ImageObject[]|null
     *
     * @see https://schema.org/thumbnail
     */
    public ImageObject|array|null $thumbnail = null;

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/thumbnailUrl
     */
    public string|array|null $thumbnailUrl = null;

    /**
     * Approximate or typical time it usually takes to work with or through the
     * content of this work for the typical or target audience.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/timeRequired
     */
    public string|array|null $timeRequired = null;

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/translator
     */
    public Organization|Person|array|null $translator = null;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/typicalAgeRange
     */
    public string|array|null $typicalAgeRange = null;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @var int|float|string|int[]|float[]|string[]|null
     *
     * @see https://schema.org/version
     */
    public int|float|string|array|null $version = null;

    /**
     * An embedded video object.
     *
     * @var Clip|VideoObject|Clip[]|VideoObject[]|null
     *
     * @see https://schema.org/video
     */
    public Clip|VideoObject|array|null $video = null;

    /**
     * The number of words in the text of the CreativeWork such as an Article,
     * Book, etc.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/wordCount
     */
    public int|array|null $wordCount = null;

    /**
     * Example/instance/realization/derivation of the concept of this creative
     * work. E.g. the paperback edition, first edition, or e-book.
     *
     * @var CreativeWork|CreativeWork[]|null
     *
     * @see https://schema.org/workExample
     */
    public CreativeWork|array|null $workExample = null;
}
