<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Hostel.
 *
 * A hostel - cheap accommodation, often in shared dormitories.
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see https://schema.org/Hostel
 */
class Hostel extends LodgingBusiness {

    public const SCHEMA_TYPE = 'Hostel';
}
