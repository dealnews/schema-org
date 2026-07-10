<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TelevisionChannel.
 *
 * A unique instance of a television BroadcastService on a
 * CableOrSatelliteService lineup.
 *
 * @see https://schema.org/TelevisionChannel
 */
class TelevisionChannel extends BroadcastChannel {

    public const SCHEMA_TYPE = 'TelevisionChannel';
}
