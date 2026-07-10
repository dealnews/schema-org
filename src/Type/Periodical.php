<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Periodical.
 *
 * A publication in any medium issued in successive parts bearing numerical or
 * chronological designations and intended to continue indefinitely, such as a
 * magazine, scholarly journal, or newspaper.
 *
 * See also [blog
 * post](https://blog.schema.org/2014/09/02/schema-org-support-for-bibliographic-relationships-and-periodicals/).
 *
 * @see https://schema.org/Periodical
 */
class Periodical extends CreativeWorkSeries {

    public const SCHEMA_TYPE = 'Periodical';
}
