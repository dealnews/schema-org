<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PaymentChargeSpecification.
 *
 * The costs of settling the payment using a particular payment method.
 *
 * @see https://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification {

    public const SCHEMA_TYPE = 'PaymentChargeSpecification';

    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/appliesToDeliveryMethod
     */
    public string|array|null $appliesToDeliveryMethod = null;

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @var PaymentMethod|PaymentMethod[]|null
     *
     * @see https://schema.org/appliesToPaymentMethod
     */
    public PaymentMethod|array|null $appliesToPaymentMethod = null;
}
