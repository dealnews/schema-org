<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DeliveryMethod.
 *
 * A delivery method is a standardized procedure for transferring the product
 * or service to the destination of fulfillment chosen by the customer.
 * Delivery methods are characterized by the means of transportation used, and
 * by the organization or group that is the contracting party for the sending
 * organization or person.
 *
 * Commonly used values:
 *
 * * http://purl.org/goodrelations/v1#DeliveryModeDirectDownload
 * * http://purl.org/goodrelations/v1#DeliveryModeFreight
 * * http://purl.org/goodrelations/v1#DeliveryModeMail
 * * http://purl.org/goodrelations/v1#DeliveryModeOwnFleet
 * * http://purl.org/goodrelations/v1#DeliveryModePickUp
 * * http://purl.org/goodrelations/v1#DHL
 * * http://purl.org/goodrelations/v1#FederalExpress
 * * http://purl.org/goodrelations/v1#UPS
 *
 * @see https://schema.org/DeliveryMethod
 */
class DeliveryMethod extends Enumeration {

    public const SCHEMA_TYPE = 'DeliveryMethod';

    public const LOCKER_DELIVERY = 'https://schema.org/LockerDelivery';
    public const ON_SITE_PICKUP = 'https://schema.org/OnSitePickup';
    public const PARCEL_SERVICE = 'https://schema.org/ParcelService';
}
