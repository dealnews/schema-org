<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Series.
 *
 * A Series in schema.org is a group of related items, typically but not
 * necessarily of the same kind. See also [[CreativeWorkSeries]],
 * [[EventSeries]].
 *
 * @see https://schema.org/Series
 */
class Series extends Intangible {

    public const SCHEMA_TYPE = 'Series';
}
