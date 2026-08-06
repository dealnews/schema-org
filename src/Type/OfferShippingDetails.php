<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OfferShippingDetails.
 *
 * OfferShippingDetails represents information about shipping destinations.
 *
 * Multiple of these entities can be used to represent different shipping rates
 * for different destinations:
 *
 * One entity for Alaska/Hawaii. A different one for continental US. A
 * different one for all France.
 *
 * Multiple of these entities can be used to represent different shipping costs
 * and delivery times.
 *
 * Two entities that are identical but differ in rate and time:
 *
 * E.g. Cheaper and slower: $5 in 5-7 days
 * or Fast and expensive: $15 in 1-2 days.
 *
 * @see https://schema.org/OfferShippingDetails
 */
class OfferShippingDetails extends StructuredValue {

    public const SCHEMA_TYPE = 'OfferShippingDetails';

    /**
     * The total delay between the receipt of the order and the goods reaching the
     * final customer.
     *
     * @var ShippingDeliveryTime|ShippingDeliveryTime[]|null
     *
     * @see https://schema.org/deliveryTime
     */
    public ShippingDeliveryTime|array|null $deliveryTime = null;

    /**
     * The depth of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/depth
     */
    public string|QuantitativeValue|array|null $depth = null;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/doesNotShip
     */
    public bool|array|null $doesNotShip = null;

    /**
     * The height of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/height
     */
    public string|QuantitativeValue|array|null $height = null;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in
     * several ways, e.g. postalCode ranges.
     *
     * @var DefinedRegion|DefinedRegion[]|null
     *
     * @see https://schema.org/shippingDestination
     */
    public DefinedRegion|array|null $shippingDestination = null;

    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     *
     * @var DefinedRegion|DefinedRegion[]|null
     *
     * @see https://schema.org/shippingOrigin
     */
    public DefinedRegion|array|null $shippingOrigin = null;

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are
     * most appropriate.
     *
     * @var MonetaryAmount|ShippingRateSettings|MonetaryAmount[]|ShippingRateSettings[]|null
     *
     * @see https://schema.org/shippingRate
     */
    public MonetaryAmount|ShippingRateSettings|array|null $shippingRate = null;

    /**
     * The weight of the product or person.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/weight
     */
    public string|QuantitativeValue|array|null $weight = null;

    /**
     * The width of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/width
     */
    public string|QuantitativeValue|array|null $width = null;
}
