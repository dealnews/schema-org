<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MediaObject.
 *
 * A media object, such as an image, video, audio, or text object embedded in a
 * web page or a downloadable dataset i.e. DataDownload. Note that a creative
 * work may have many media objects associated with it on the same web page.
 * For example, a page about a single song (MusicRecording) may have a music
 * video (VideoObject), and a high and low bandwidth audio stream (2
 * AudioObject's).
 *
 * @see https://schema.org/MediaObject
 */
class MediaObject extends CreativeWork {

    public const SCHEMA_TYPE = 'MediaObject';

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @var NewsArticle|array|null
     *
     * @see https://schema.org/associatedArticle
     */
    public NewsArticle|array|null $associatedArticle = null;

    /**
     * The bitrate of the media object.
     *
     * @var string|array|null
     *
     * @see https://schema.org/bitrate
     */
    public string|array|null $bitrate = null;

    /**
     * File size in (mega/kilo)bytes.
     *
     * @var string|array|null
     *
     * @see https://schema.org/contentSize
     */
    public string|array|null $contentSize = null;

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @var string|array|null
     *
     * @see https://schema.org/contentUrl
     */
    public string|array|null $contentUrl = null;

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
     * A URL pointing to a player for a specific video. In general, this is the
     * information in the ```src``` element of an ```embed``` tag and should not be
     * the same as the content of the ```loc``` tag.
     *
     * @var string|array|null
     *
     * @see https://schema.org/embedUrl
     */
    public string|array|null $embedUrl = null;

    /**
     * The CreativeWork encoded by this media object.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/encodesCreativeWork
     */
    public CreativeWork|array|null $encodesCreativeWork = null;

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from January to *December*. For media, including audio and
     * video, it's the time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|array|null
     *
     * @see https://schema.org/endTime
     */
    public string|array|null $endTime = null;

    /**
     * The height of the item.
     *
     * @var string|QuantitativeValue|array|null
     *
     * @see https://schema.org/height
     */
    public string|QuantitativeValue|array|null $height = null;

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     * @var string|array|null
     *
     * @see https://schema.org/playerType
     */
    public string|array|null $playerType = null;

    /**
     * The production company or studio responsible for the item, e.g. series,
     * video game, episode etc.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/productionCompany
     */
    public Organization|array|null $productionCompany = null;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed
     * to be allowed everywhere. Specify the countries in [ISO 3166
     * format](http://en.wikipedia.org/wiki/ISO_3166).
     *
     * @var Place|array|null
     *
     * @see https://schema.org/regionsAllowed
     */
    public Place|array|null $regionsAllowed = null;

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

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and
     * video, it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|array|null
     *
     * @see https://schema.org/startTime
     */
    public string|array|null $startTime = null;

    /**
     * Date (including time if available) when this media object was uploaded to
     * this site.
     *
     * @var string|array|null
     *
     * @see https://schema.org/uploadDate
     */
    public string|array|null $uploadDate = null;

    /**
     * The width of the item.
     *
     * @var string|QuantitativeValue|array|null
     *
     * @see https://schema.org/width
     */
    public string|QuantitativeValue|array|null $width = null;
}
