<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ShippingRateSettings.
 *
 * A ShippingRateSettings represents re-usable pieces of shipping information.
 * It is designed for publication on an URL that may be referenced via the
 * [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several
 * occurrences can be published, distinguished and matched (i.e.
 * identified/referenced) by their different values for [[shippingLabel]].
 *
 * @see https://schema.org/ShippingRateSettings
 */
class ShippingRateSettings extends StructuredValue {

    public const SCHEMA_TYPE = 'ShippingRateSettings';

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/doesNotShip
     */
    public bool|array|null $doesNotShip = null;

    /**
     * A monetary value above (or at) which the shipping rate becomes free.
     * Intended to be used via an [[OfferShippingDetails]] with
     * [[shippingSettingsLink]] matching this [[ShippingRateSettings]].
     *
     * @var DeliveryChargeSpecification|MonetaryAmount|array|null
     *
     * @see https://schema.org/freeShippingThreshold
     */
    public DeliveryChargeSpecification|MonetaryAmount|array|null $freeShippingThreshold = null;

    /**
     * This can be marked 'true' to indicate that some published
     * [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply
     * to all [[OfferShippingDetails]] published by the same merchant, when
     * referenced by a [[shippingSettingsLink]] in those settings. It is not
     * meaningful to use a 'true' value for this property alongside a
     * transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for
     * [[ShippingRateSettings]]), since this property is for use with unlabelled
     * settings.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/isUnlabelledFallback
     */
    public bool|array|null $isUnlabelledFallback = null;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in
     * several ways, e.g. postalCode ranges.
     *
     * @var DefinedRegion|array|null
     *
     * @see https://schema.org/shippingDestination
     */
    public DefinedRegion|array|null $shippingDestination = null;

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are
     * most appropriate.
     *
     * @var MonetaryAmount|ShippingRateSettings|array|null
     *
     * @see https://schema.org/shippingRate
     */
    public MonetaryAmount|ShippingRateSettings|array|null $shippingRate = null;
}
