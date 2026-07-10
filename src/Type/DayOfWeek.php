<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DayOfWeek.
 *
 * The day of the week, e.g. used to specify to which day the opening hours of
 * an OpeningHoursSpecification refer.
 *
 * Originally, URLs from [GoodRelations](http://purl.org/goodrelations/v1) were
 * used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]],
 * [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these
 * have now been integrated directly into schema.org.
 *
 * @see https://schema.org/DayOfWeek
 */
class DayOfWeek extends Enumeration {

    public const SCHEMA_TYPE = 'DayOfWeek';

    public const FRIDAY = 'https://schema.org/Friday';
    public const MONDAY = 'https://schema.org/Monday';
    public const PUBLIC_HOLIDAYS = 'https://schema.org/PublicHolidays';
    public const SATURDAY = 'https://schema.org/Saturday';
    public const SUNDAY = 'https://schema.org/Sunday';
    public const THURSDAY = 'https://schema.org/Thursday';
    public const TUESDAY = 'https://schema.org/Tuesday';
    public const WEDNESDAY = 'https://schema.org/Wednesday';
}
