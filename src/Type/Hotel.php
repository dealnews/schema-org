<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Hotel.
 *
 * A hotel is an establishment that provides lodging paid on a short-term basis
 * (source: Wikipedia, the free encyclopedia, see
 * http://en.wikipedia.org/wiki/Hotel).
 *
 * See also the dedicated document on the use of schema.org for marking up
 * hotels and other forms of accommodations (/docs/hotels.html).
 *
 * @see https://schema.org/Hotel
 */
class Hotel extends LodgingBusiness {

    public const SCHEMA_TYPE = 'Hotel';
}
