<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Demand.
 *
 * A demand entity represents the public, not necessarily binding, not
 * necessarily exclusive, announcement by an organization or person to seek a
 * certain type of goods or services. For describing demand using this type,
 * the very same properties used for Offer apply.
 *
 * @see https://schema.org/Demand
 */
class Demand extends Intangible {

    public const SCHEMA_TYPE = 'Demand';

    /**
     * The payment method(s) that are accepted in general by an organization, or
     * for some specific demand or offer.
     *
     * @var LoanOrCredit|PaymentMethod|string|LoanOrCredit[]|PaymentMethod[]|string[]|null
     *
     * @see https://schema.org/acceptedPaymentMethod
     */
    public LoanOrCredit|PaymentMethod|string|array|null $acceptedPaymentMethod = null;

    /**
     * The amount of time that is required between accepting the offer and the
     * actual usage of the resource or service.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/advanceBookingRequirement
     */
    public QuantitativeValue|array|null $advanceBookingRequirement = null;

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @var AdministrativeArea|GeoShape|Place|string|AdministrativeArea[]|GeoShape[]|Place[]|string[]|null
     *
     * @see https://schema.org/areaServed
     */
    public AdministrativeArea|GeoShape|Place|string|array|null $areaServed = null;

    /**
     * The availability of this item—for example In stock, Out of stock,
     * Pre-order, etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availability
     */
    public string|array|null $availability = null;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availabilityEnds
     */
    public string|array|null $availabilityEnds = null;

    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availabilityStarts
     */
    public string|array|null $availabilityStarts = null;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/availableAtOrFrom
     */
    public Place|array|null $availableAtOrFrom = null;

    /**
     * The delivery method(s) available for this offer.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availableDeliveryMethod
     */
    public string|array|null $availableDeliveryMethod = null;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/businessFunction
     */
    public string|array|null $businessFunction = null;

    /**
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/deliveryLeadTime
     */
    public QuantitativeValue|array|null $deliveryLeadTime = null;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/eligibleCustomerType
     */
    public string|array|null $eligibleCustomerType = null;

    /**
     * The duration for which the given offer is valid.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/eligibleDuration
     */
    public QuantitativeValue|array|null $eligibleDuration = null;

    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/eligibleQuantity
     */
    public QuantitativeValue|array|null $eligibleQuantity = null;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     *
     * See also [[ineligibleRegion]].
     *
     * @var GeoShape|Place|string|GeoShape[]|Place[]|string[]|null
     *
     * @see https://schema.org/eligibleRegion
     */
    public GeoShape|Place|string|array|null $eligibleRegion = null;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var PriceSpecification|PriceSpecification[]|null
     *
     * @see https://schema.org/eligibleTransactionVolume
     */
    public PriceSpecification|array|null $eligibleTransactionVolume = null;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers.
     * The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C.
     * Company Prefix, Item Reference, and Check Digit used to identify trade
     * items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin12
     */
    public string|array|null $gtin12 = null;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers.
     * This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit
     * UPC codes can be converted into a GTIN-13 code by simply adding a preceding
     * zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin13
     */
    public string|array|null $gtin13 = null;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers.
     * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin14
     */
    public string|array|null $gtin14 = null;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin8
     */
    public string|array|null $gtin8 = null;

    /**
     * This links to a node or nodes indicating the exact quantity of the products
     * included in  an [[Offer]] or [[ProductCollection]].
     *
     * @var TypeAndQuantityNode|TypeAndQuantityNode[]|null
     *
     * @see https://schema.org/includesObject
     */
    public TypeAndQuantityNode|array|null $includesObject = null;

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var QuantitativeValue|QuantitativeValue[]|null
     *
     * @see https://schema.org/inventoryLevel
     */
    public QuantitativeValue|array|null $inventoryLevel = null;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the
     * product or service, or the products or services included in the offer. Also
     * used for product return policies to specify the condition of products
     * accepted for returns.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/itemCondition
     */
    public string|array|null $itemCondition = null;

    /**
     * An item being offered (or demanded). The transactional nature of the offer
     * or demand is documented using [[businessFunction]], e.g. sell, lease etc.
     * While several common expected types are listed explicitly in this
     * definition, others can be used. Using a second type, such as Product or a
     * subtype of Product, can clarify the nature of the offer.
     *
     * @var AggregateOffer|CreativeWork|Event|MenuItem|Product|Service|Trip|AggregateOffer[]|CreativeWork[]|Event[]|MenuItem[]|Product[]|Service[]|Trip[]|null
     *
     * @see https://schema.org/itemOffered
     */
    public AggregateOffer|CreativeWork|Event|MenuItem|Product|Service|Trip|array|null $itemOffered = null;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which
     * the offer refers.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/mpn
     */
    public string|array|null $mpn = null;

    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @var PriceSpecification|PriceSpecification[]|null
     *
     * @see https://schema.org/priceSpecification
     */
    public PriceSpecification|array|null $priceSpecification = null;

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/seller
     */
    public Organization|Person|array|null $seller = null;

    /**
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/serialNumber
     */
    public string|array|null $serialNumber = null;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/sku
     */
    public string|array|null $sku = null;

    /**
     * The date when the item becomes valid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validFrom
     */
    public string|array|null $validFrom = null;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validThrough
     */
    public string|array|null $validThrough = null;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var WarrantyPromise|WarrantyPromise[]|null
     *
     * @see https://schema.org/warranty
     */
    public WarrantyPromise|array|null $warranty = null;
}
