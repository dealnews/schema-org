<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BroadcastFrequencySpecification.
 *
 * The frequency in MHz and the modulation used for a particular
 * BroadcastService.
 *
 * @see https://schema.org/BroadcastFrequencySpecification
 */
class BroadcastFrequencySpecification extends Intangible {

    public const SCHEMA_TYPE = 'BroadcastFrequencySpecification';

    /**
     * The frequency in MHz for a particular broadcast.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/broadcastFrequencyValue
     */
    public int|float|QuantitativeValue|array|null $broadcastFrequencyValue = null;
}
