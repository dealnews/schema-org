<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Reservation.
 *
 * Describes a reservation for travel, dining or an event. Some reservations
 * require tickets.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, restaurant reservations, flights, or
 * rental cars, use [[Offer]].
 *
 * @see https://schema.org/Reservation
 */
class Reservation extends Intangible {

    public const SCHEMA_TYPE = 'Reservation';

    /**
     * The date and time the reservation was booked.
     *
     * @var string|array|null
     *
     * @see https://schema.org/bookingTime
     */
    public string|array|null $bookingTime = null;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/broker
     */
    public Organization|Person|array|null $broker = null;

    /**
     * The date and time the reservation was modified.
     *
     * @var string|array|null
     *
     * @see https://schema.org/modifiedTime
     */
    public string|array|null $modifiedTime = null;

    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
     * and other currency types, e.g. "Ithaca HOUR".
     *
     * @var string|array|null
     *
     * @see https://schema.org/priceCurrency
     */
    public string|array|null $priceCurrency = null;

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being
     * applied to the reservation.
     *
     * @var ProgramMembership|array|null
     *
     * @see https://schema.org/programMembershipUsed
     */
    public ProgramMembership|array|null $programMembershipUsed = null;

    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/reservationFor
     */
    public Thing|array|null $reservationFor = null;

    /**
     * A unique identifier for the reservation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/reservationId
     */
    public string|array|null $reservationId = null;

    /**
     * The current status of the reservation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/reservationStatus
     */
    public string|array|null $reservationStatus = null;

    /**
     * A ticket associated with the reservation.
     *
     * @var Ticket|array|null
     *
     * @see https://schema.org/reservedTicket
     */
    public Ticket|array|null $reservedTicket = null;

    /**
     * The total price for the reservation or ticket, including applicable taxes,
     * shipping, etc.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @var int|float|PriceSpecification|string|array|null
     *
     * @see https://schema.org/totalPrice
     */
    public int|float|PriceSpecification|string|array|null $totalPrice = null;

    /**
     * The person or organization the reservation or ticket is for.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/underName
     */
    public Organization|Person|array|null $underName = null;
}
