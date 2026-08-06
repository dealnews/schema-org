<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Invoice.
 *
 * A statement of the money due for goods or services; a bill.
 *
 * @see https://schema.org/Invoice
 */
class Invoice extends Intangible {

    public const SCHEMA_TYPE = 'Invoice';

    /**
     * The identifier for the account the payment will be applied to.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accountId
     */
    public string|array|null $accountId = null;

    /**
     * The time interval used to compute the invoice.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/billingPeriod
     */
    public string|array|null $billingPeriod = null;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/broker
     */
    public Organization|Person|array|null $broker = null;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/category
     */
    public string|Thing|array|null $category = null;

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/confirmationNumber
     */
    public string|array|null $confirmationNumber = null;

    /**
     * Party placing the order or paying the invoice.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/customer
     */
    public Organization|Person|array|null $customer = null;

    /**
     * The minimum payment required at this time.
     *
     * @var MonetaryAmount|PriceSpecification|MonetaryAmount[]|PriceSpecification[]|null
     *
     * @see https://schema.org/minimumPaymentDue
     */
    public MonetaryAmount|PriceSpecification|array|null $minimumPaymentDue = null;

    /**
     * The date that payment is due.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/paymentDueDate
     */
    public string|array|null $paymentDueDate = null;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @var PaymentMethod|string|PaymentMethod[]|string[]|null
     *
     * @see https://schema.org/paymentMethod
     */
    public PaymentMethod|string|array|null $paymentMethod = null;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the
     * credit card).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/paymentMethodId
     */
    public string|array|null $paymentMethodId = null;

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/paymentStatus
     */
    public string|array|null $paymentStatus = null;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined
     * into a single Invoice.
     *
     * @var Order|Order[]|null
     *
     * @see https://schema.org/referencesOrder
     */
    public Order|array|null $referencesOrder = null;

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/scheduledPaymentDate
     */
    public string|array|null $scheduledPaymentDate = null;

    /**
     * The total amount due.
     *
     * @var MonetaryAmount|PriceSpecification|MonetaryAmount[]|PriceSpecification[]|null
     *
     * @see https://schema.org/totalPaymentDue
     */
    public MonetaryAmount|PriceSpecification|array|null $totalPaymentDue = null;
}
