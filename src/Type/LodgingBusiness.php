<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LodgingBusiness.
 *
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @see https://schema.org/LodgingBusiness
 */
class LodgingBusiness extends LocalBusiness {

    public const SCHEMA_TYPE = 'LodgingBusiness';

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|array|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

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
     * The earliest someone may check into a lodging establishment.
     *
     * @var string|array|null
     *
     * @see https://schema.org/checkinTime
     */
    public string|array|null $checkinTime = null;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @var string|array|null
     *
     * @see https://schema.org/checkoutTime
     */
    public string|array|null $checkoutTime = null;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation
     * or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
     * be put in the unitText property of the QuantitativeValue.
     *
     * @var int|float|QuantitativeValue|array|null
     *
     * @see https://schema.org/numberOfRooms
     */
    public int|float|QuantitativeValue|array|null $numberOfRooms = null;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var bool|string|array|null
     *
     * @see https://schema.org/petsAllowed
     */
    public bool|string|array|null $petsAllowed = null;

    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to
     * indicate the rating organization, e.g. as an Organization with name such as
     * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @var Rating|array|null
     *
     * @see https://schema.org/starRating
     */
    public Rating|array|null $starRating = null;
}
