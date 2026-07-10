<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BookSeries.
 *
 * A series of books. Included books can be indicated with the hasPart
 * property.
 *
 * @see https://schema.org/BookSeries
 */
class BookSeries extends CreativeWorkSeries {

    public const SCHEMA_TYPE = 'BookSeries';
}
