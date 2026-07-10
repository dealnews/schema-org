<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OrderStatus.
 *
 * Enumerated status values for Order.
 *
 * @see https://schema.org/OrderStatus
 */
class OrderStatus extends StatusEnumeration {

    public const SCHEMA_TYPE = 'OrderStatus';

    public const ORDER_CANCELLED = 'https://schema.org/OrderCancelled';
    public const ORDER_DELIVERED = 'https://schema.org/OrderDelivered';
    public const ORDER_IN_TRANSIT = 'https://schema.org/OrderInTransit';
    public const ORDER_PAYMENT_DUE = 'https://schema.org/OrderPaymentDue';
    public const ORDER_PICKUP_AVAILABLE = 'https://schema.org/OrderPickupAvailable';
    public const ORDER_PROBLEM = 'https://schema.org/OrderProblem';
    public const ORDER_PROCESSING = 'https://schema.org/OrderProcessing';
    public const ORDER_RETURNED = 'https://schema.org/OrderReturned';
}
