<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Ticket.
 *
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see https://schema.org/Ticket
 */
class Ticket extends Intangible {

    public const SCHEMA_TYPE = 'Ticket';

    /**
     * The date the ticket was issued.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dateIssued
     */
    public string|array|null $dateIssued = null;

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or
     * [[Certification]].
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/issuedBy
     */
    public Organization|array|null $issuedBy = null;

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
     * The unique identifier for the ticket.
     *
     * @var string|array|null
     *
     * @see https://schema.org/ticketNumber
     */
    public string|array|null $ticketNumber = null;

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for
     * entrance.
     *
     * @var string|array|null
     *
     * @see https://schema.org/ticketToken
     */
    public string|array|null $ticketToken = null;

    /**
     * The seat associated with the ticket.
     *
     * @var Seat|array|null
     *
     * @see https://schema.org/ticketedSeat
     */
    public Seat|array|null $ticketedSeat = null;

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
