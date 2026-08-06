<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BroadcastChannel.
 *
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @see https://schema.org/BroadcastChannel
 */
class BroadcastChannel extends Intangible {

    public const SCHEMA_TYPE = 'BroadcastChannel';

    /**
     * The unique address by which the BroadcastService can be identified in a
     * provider lineup. In US, this is typically a number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/broadcastChannelId
     */
    public string|array|null $broadcastChannelId = null;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple
     * ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequencies of AM and FM radio channels, e.g. "87 FM".
     *
     * @var BroadcastFrequencySpecification|string|BroadcastFrequencySpecification[]|string[]|null
     *
     * @see https://schema.org/broadcastFrequency
     */
    public BroadcastFrequencySpecification|string|array|null $broadcastFrequency = null;

    /**
     * The type of service required to have access to the channel (e.g. Standard or
     * Premium).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/broadcastServiceTier
     */
    public string|array|null $broadcastServiceTier = null;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/genre
     */
    public string|array|null $genre = null;

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @var CableOrSatelliteService|CableOrSatelliteService[]|null
     *
     * @see https://schema.org/inBroadcastLineup
     */
    public CableOrSatelliteService|array|null $inBroadcastLineup = null;

    /**
     * The BroadcastService offered on this channel.
     *
     * @var BroadcastService|BroadcastService[]|null
     *
     * @see https://schema.org/providesBroadcastService
     */
    public BroadcastService|array|null $providesBroadcastService = null;
}
