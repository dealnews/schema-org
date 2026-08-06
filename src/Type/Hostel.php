<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Hostel.
 *
 * A hostel - cheap accommodation, often in shared dormitories.
 *
 * See also the dedicated document on the use of schema.org for marking up
 * hotels and other forms of accommodations (/docs/hotels.html).
 *
 * @see https://schema.org/Hostel
 */
class Hostel extends LodgingBusiness {

    public const SCHEMA_TYPE = 'Hostel';
}
