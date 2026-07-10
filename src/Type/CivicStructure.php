<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CivicStructure.
 *
 * A public structure, such as a town hall or concert hall.
 *
 * @see https://schema.org/CivicStructure
 */
class CivicStructure extends Place {

    public const SCHEMA_TYPE = 'CivicStructure';

    /**
     * The general opening hours for a business. Opening hours can be specified as
     * a weekly time range, starting with days, then times per day. Multiple days
     * can be listed with commas ',' separating each day. Day or time ranges are
     * specified using a hyphen '-'.
     *
     * * Days are specified using the following two-letter combinations: ```Mo```,
     * ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
     * * Times are specified using 24:00 format. For example, 3pm is specified as
     * ```15:00```, 10am as ```10:00```.
     * * Here is an example: <code>&lt;time itemprop="openingHours"
     * datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays
     * 4-8pm&lt;/time&gt;</code>.
     * * If a business is open 7 days a week, then it can be specified as
     * <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all
     * day&lt;/time&gt;</code>.
     *
     * @var string|array|null
     *
     * @see https://schema.org/openingHours
     */
    public string|array|null $openingHours = null;
}
