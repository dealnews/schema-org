<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Suite.
 *
 * A suite in a hotel or other public accommodation, denotes a class of luxury
 * accommodations, the key feature of which is multiple rooms (source:
 * Wikipedia, the free encyclopedia, see
 * http://en.wikipedia.org/wiki/Suite_(hotel)
 * (http://en.wikipedia.org/wiki/Suite_(hotel))).
 *
 * See also the dedicated document on the use of schema.org for marking up
 * hotels and other forms of accommodations (/docs/hotels.html).
 *
 * @see https://schema.org/Suite
 */
class Suite extends Accommodation {

    public const SCHEMA_TYPE = 'Suite';
}
