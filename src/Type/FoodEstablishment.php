<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * FoodEstablishment.
 *
 * A food-related business.
 *
 * @see https://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness {

    public const SCHEMA_TYPE = 'FoodEstablishment';

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be
     * Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     *
     * @var bool|string|bool[]|string[]|null
     *
     * @see https://schema.org/acceptsReservations
     */
    public bool|string|array|null $acceptsReservations = null;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of
     * the menu.
     *
     * @var Menu|string|Menu[]|string[]|null
     *
     * @see https://schema.org/hasMenu
     */
    public Menu|string|array|null $hasMenu = null;

    /**
     * The cuisine of the restaurant.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/servesCuisine
     */
    public string|array|null $servesCuisine = null;

    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to
     * indicate the rating organization, e.g. as an Organization with name such as
     * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @var Rating|Rating[]|null
     *
     * @see https://schema.org/starRating
     */
    public Rating|array|null $starRating = null;
}
