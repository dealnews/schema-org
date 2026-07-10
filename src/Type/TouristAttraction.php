<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TouristAttraction.
 *
 * A tourist attraction.  In principle any Thing can be a
 * [[TouristAttraction]], from a [[Mountain]] and
 * [[LandmarksOrHistoricalBuildings]] to a [[LocalBusiness]].  This Type can be
 * used on its own to describe a general [[TouristAttraction]], or be used as
 * an [[additionalType]] to add tourist attraction properties to any other
 * type.  (See examples below)
 *
 * @see https://schema.org/TouristAttraction
 */
class TouristAttraction extends Place {

    public const SCHEMA_TYPE = 'TouristAttraction';

    /**
     * A language someone may use with or at the item, service or place. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @var Language|string|array|null
     *
     * @see https://schema.org/availableLanguage
     */
    public Language|string|array|null $availableLanguage = null;

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a
     * particular country, etc.
     *
     * @var Audience|string|array|null
     *
     * @see https://schema.org/touristType
     */
    public Audience|string|array|null $touristType = null;
}
