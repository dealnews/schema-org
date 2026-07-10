<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Order.
 *
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
 *
 * @see https://schema.org/Order
 */
class Order extends Intangible {

    public const SCHEMA_TYPE = 'Order';

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included
     * in the order.
     *
     * @var Offer|array|null
     *
     * @see https://schema.org/acceptedOffer
     */
    public Offer|array|null $acceptedOffer = null;

    /**
     * The billing address for the order.
     *
     * @var PostalAddress|array|null
     *
     * @see https://schema.org/billingAddress
     */
    public PostalAddress|array|null $billingAddress = null;

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
     * A number that confirms the given order or payment has been received.
     *
     * @var string|array|null
     *
     * @see https://schema.org/confirmationNumber
     */
    public string|array|null $confirmationNumber = null;

    /**
     * Party placing the order or paying the invoice.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/customer
     */
    public Organization|Person|array|null $customer = null;

    /**
     * Any discount applied (to an Order).
     *
     * @var int|float|string|array|null
     *
     * @see https://schema.org/discount
     */
    public int|float|string|array|null $discount = null;

    /**
     * Code used to redeem a discount.
     *
     * @var string|array|null
     *
     * @see https://schema.org/discountCode
     */
    public string|array|null $discountCode = null;

    /**
     * The currency of the discount.
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
     * @see https://schema.org/discountCurrency
     */
    public string|array|null $discountCurrency = null;

    /**
     * Indicates whether the offer was accepted as a gift for someone other than
     * the buyer.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/isGift
     */
    public bool|array|null $isGift = null;

    /**
     * Date order was placed.
     *
     * @var string|array|null
     *
     * @see https://schema.org/orderDate
     */
    public string|array|null $orderDate = null;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @var ParcelDelivery|array|null
     *
     * @see https://schema.org/orderDelivery
     */
    public ParcelDelivery|array|null $orderDelivery = null;

    /**
     * The identifier of the transaction.
     *
     * @var string|array|null
     *
     * @see https://schema.org/orderNumber
     */
    public string|array|null $orderNumber = null;

    /**
     * The current status of the order.
     *
     * @var string|array|null
     *
     * @see https://schema.org/orderStatus
     */
    public string|array|null $orderStatus = null;

    /**
     * The item ordered.
     *
     * @var OrderItem|Product|Service|array|null
     *
     * @see https://schema.org/orderedItem
     */
    public OrderItem|Product|Service|array|null $orderedItem = null;

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @var Invoice|array|null
     *
     * @see https://schema.org/partOfInvoice
     */
    public Invoice|array|null $partOfInvoice = null;

    /**
     * The date that payment is due.
     *
     * @var string|array|null
     *
     * @see https://schema.org/paymentDueDate
     */
    public string|array|null $paymentDueDate = null;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var PaymentMethod|string|array|null
     *
     * @see https://schema.org/paymentMethod
     */
    public PaymentMethod|string|array|null $paymentMethod = null;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the
     * credit card).
     *
     * @var string|array|null
     *
     * @see https://schema.org/paymentMethodId
     */
    public string|array|null $paymentMethodId = null;

    /**
     * The URL for sending a payment.
     *
     * @var string|array|null
     *
     * @see https://schema.org/paymentUrl
     */
    public string|array|null $paymentUrl = null;

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/seller
     */
    public Organization|Person|array|null $seller = null;
}
