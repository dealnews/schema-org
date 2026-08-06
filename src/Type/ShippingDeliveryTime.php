<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ShippingDeliveryTime.
 *
 * ShippingDeliveryTime provides various pieces of information about delivery
 * times for shipping.
 *
 * @see https://schema.org/ShippingDeliveryTime
 */
class ShippingDeliveryTime extends StructuredValue {

    public const SCHEMA_TYPE = 'ShippingDeliveryTime';

    /**
     * Days of the week when the merchant typically operates, indicated via opening
     * hours markup.
     *
     * @var string|OpeningHoursSpecification|string[]|OpeningHoursSpecification[]|null
     *
     * @see https://schema.org/businessDays
     */
    public string|OpeningHoursSpecification|array|null $businessDays = null;

    /**
     * Order cutoff time allows merchants to describe the time after which they
     * will no longer process orders received on that day. For orders processed
     * after cutoff time, one day gets added to the delivery time estimate. This
     * property is expected to be most typically used via the
     * [[ShippingRateSettings]] publication pattern. The time is indicated using
     * the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm
     * Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal
     * Time (UTC).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/cutoffTime
     */
    public string|array|null $cutoffTime = null;

    /**
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup.
     *
     * In the context of [[ShippingDeliveryTime]], Typical properties: minValue,
     * maxValue, unitCode (d for DAY).  This is by common convention assumed to
     * mean business days (if a unitCode is used, coded as "d"), i.e. only counting
     * days when the business normally operates.
     *
     * In the context of [[ShippingService]], use the [[ServicePeriod]] format,
     * that contains the same information in a structured form, with cut-off time,
     * business days and duration.
     *
     * @var QuantitativeValue|string|QuantitativeValue[]|string[]|null
     *
     * @see https://schema.org/handlingTime
     */
    public QuantitativeValue|string|array|null $handlingTime = null;

    /**
     * The typical delay the order has been sent for delivery and the goods reach
     * the final customer.
     *
     *   In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]].
     * Typical properties: minValue, maxValue, unitCode (d for DAY).
     *
     *   In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It
     * has a duration (as a [[QuantitativeValue]]) and also business days and a
     * cut-off time.
     *
     * @var QuantitativeValue|string|QuantitativeValue[]|string[]|null
     *
     * @see https://schema.org/transitTime
     */
    public QuantitativeValue|string|array|null $transitTime = null;
}
