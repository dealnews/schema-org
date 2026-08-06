<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OrderItem.
 *
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see https://schema.org/OrderItem
 */
class OrderItem extends StructuredValue {

    public const SCHEMA_TYPE = 'OrderItem';

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @var ParcelDelivery|ParcelDelivery[]|null
     *
     * @see https://schema.org/orderDelivery
     */
    public ParcelDelivery|array|null $orderDelivery = null;

    /**
     * The identifier of the order item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/orderItemNumber
     */
    public string|array|null $orderItemNumber = null;

    /**
     * The current status of the order item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/orderItemStatus
     */
    public string|array|null $orderItemStatus = null;

    /**
     * The number of the item ordered. If the property is not set, assume the
     * quantity is one.
     *
     * @var int|float|QuantitativeValue|int[]|float[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/orderQuantity
     */
    public int|float|QuantitativeValue|array|null $orderQuantity = null;

    /**
     * The item ordered.
     *
     * @var OrderItem|Product|Service|OrderItem[]|Product[]|Service[]|null
     *
     * @see https://schema.org/orderedItem
     */
    public OrderItem|Product|Service|array|null $orderedItem = null;
}
