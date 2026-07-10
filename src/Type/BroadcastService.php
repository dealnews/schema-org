<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BroadcastService.
 *
 * A delivery service through which content is provided via broadcast over the
 * air or online.
 *
 * @see https://schema.org/BroadcastService
 */
class BroadcastService extends Service {

    public const SCHEMA_TYPE = 'BroadcastService';

    /**
     * The media network(s) whose content is broadcast on this station.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/broadcastAffiliateOf
     */
    public Organization|array|null $broadcastAffiliateOf = null;

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the
     * network name.
     *
     * @var string|array|null
     *
     * @see https://schema.org/broadcastDisplayName
     */
    public string|array|null $broadcastDisplayName = null;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple
     * ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequencies of AM and FM radio channels, e.g. "87 FM".
     *
     * @var BroadcastFrequencySpecification|string|array|null
     *
     * @see https://schema.org/broadcastFrequency
     */
    public BroadcastFrequencySpecification|string|array|null $broadcastFrequency = null;

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for
     * which the service bases its broadcasts.
     *
     * @var string|array|null
     *
     * @see https://schema.org/broadcastTimezone
     */
    public string|array|null $broadcastTimezone = null;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/broadcaster
     */
    public Organization|array|null $broadcaster = null;

    /**
     * A broadcast channel of a broadcast service.
     *
     * @var BroadcastChannel|array|null
     *
     * @see https://schema.org/hasBroadcastChannel
     */
    public BroadcastChannel|array|null $hasBroadcastChannel = null;

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
     * A broadcast service to which the broadcast service may belong to such as
     * regional variations of a national channel.
     *
     * @var BroadcastService|array|null
     *
     * @see https://schema.org/parentService
     */
    public BroadcastService|array|null $parentService = null;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/videoFormat
     */
    public string|array|null $videoFormat = null;
}
