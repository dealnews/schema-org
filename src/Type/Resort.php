<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Resort.
 *
 * A resort is a place used for relaxation or recreation, attracting visitors
 * for holidays or vacations. Resorts are places, towns or sometimes commercial
 * establishments operated by a single company (source: Wikipedia, the free
 * encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Resort">http://en.wikipedia.org/wiki/Resort</a>).
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see https://schema.org/Resort
 */
class Resort extends LodgingBusiness {

    public const SCHEMA_TYPE = 'Resort';
}
