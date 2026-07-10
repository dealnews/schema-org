<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Apartment.
 *
 * An apartment (in American English) or flat (in British English) is a
 * self-contained housing unit (a type of residential real estate) that
 * occupies only part of a building (source: Wikipedia, the free encyclopedia,
 * see <a
 * href="http://en.wikipedia.org/wiki/Apartment">http://en.wikipedia.org/wiki/Apartment</a>).
 *
 * @see https://schema.org/Apartment
 */
class Apartment extends Accommodation {

    public const SCHEMA_TYPE = 'Apartment';
}
