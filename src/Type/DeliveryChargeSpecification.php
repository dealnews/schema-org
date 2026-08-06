<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DeliveryChargeSpecification.
 *
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see https://schema.org/DeliveryChargeSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification {

    public const SCHEMA_TYPE = 'DeliveryChargeSpecification';

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
     * The geographic area where a service or offered item is provided.
     *
     * @var AdministrativeArea|GeoShape|Place|string|AdministrativeArea[]|GeoShape[]|Place[]|string[]|null
     *
     * @see https://schema.org/areaServed
     */
    public AdministrativeArea|GeoShape|Place|string|array|null $areaServed = null;

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
}
