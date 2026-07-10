<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ParcelDelivery.
 *
 * The delivery of a parcel either via the postal service or a commercial
 * service.
 *
 * @see https://schema.org/ParcelDelivery
 */
class ParcelDelivery extends Intangible {

    public const SCHEMA_TYPE = 'ParcelDelivery';

    /**
     * Destination address.
     *
     * @var PostalAddress|array|null
     *
     * @see https://schema.org/deliveryAddress
     */
    public PostalAddress|array|null $deliveryAddress = null;

    /**
     * New entry added as the package passes through each leg of its journey (from
     * shipment to final delivery).
     *
     * @var DeliveryEvent|array|null
     *
     * @see https://schema.org/deliveryStatus
     */
    public DeliveryEvent|array|null $deliveryStatus = null;

    /**
     * The earliest date the package may arrive.
     *
     * @var string|array|null
     *
     * @see https://schema.org/expectedArrivalFrom
     */
    public string|array|null $expectedArrivalFrom = null;

    /**
     * The latest date the package may arrive.
     *
     * @var string|array|null
     *
     * @see https://schema.org/expectedArrivalUntil
     */
    public string|array|null $expectedArrivalUntil = null;

    /**
     * Method used for delivery or shipping.
     *
     * @var string|array|null
     *
     * @see https://schema.org/hasDeliveryMethod
     */
    public string|array|null $hasDeliveryMethod = null;

    /**
     * Item(s) being shipped.
     *
     * @var Product|array|null
     *
     * @see https://schema.org/itemShipped
     */
    public Product|array|null $itemShipped = null;

    /**
     * Shipper's address.
     *
     * @var PostalAddress|array|null
     *
     * @see https://schema.org/originAddress
     */
    public PostalAddress|array|null $originAddress = null;

    /**
     * The overall order the items in this delivery were included in.
     *
     * @var Order|array|null
     *
     * @see https://schema.org/partOfOrder
     */
    public Order|array|null $partOfOrder = null;

    /**
     * Shipper tracking number.
     *
     * @var string|array|null
     *
     * @see https://schema.org/trackingNumber
     */
    public string|array|null $trackingNumber = null;

    /**
     * Tracking url for the parcel delivery.
     *
     * @var string|array|null
     *
     * @see https://schema.org/trackingUrl
     */
    public string|array|null $trackingUrl = null;
}
