<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RadioChannel.
 *
 * A unique instance of a radio BroadcastService on a CableOrSatelliteService
 * lineup.
 *
 * @see https://schema.org/RadioChannel
 */
class RadioChannel extends BroadcastChannel {

    public const SCHEMA_TYPE = 'RadioChannel';
}
