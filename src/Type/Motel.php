<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Motel.
 *
 * A motel.
 *
 * See also the dedicated document on the use of schema.org for marking up
 * hotels and other forms of accommodations (/docs/hotels.html).
 *
 * @see https://schema.org/Motel
 */
class Motel extends LodgingBusiness {

    public const SCHEMA_TYPE = 'Motel';
}
