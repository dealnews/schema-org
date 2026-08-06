<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DeliveryEvent.
 *
 * An event involving the delivery of an item.
 *
 * @see https://schema.org/DeliveryEvent
 */
class DeliveryEvent extends Event {

    public const SCHEMA_TYPE = 'DeliveryEvent';

    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/accessCode
     */
    public string|array|null $accessCode = null;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availableFrom
     */
    public string|array|null $availableFrom = null;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/availableThrough
     */
    public string|array|null $availableThrough = null;

    /**
     * Method used for delivery or shipping.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/hasDeliveryMethod
     */
    public string|array|null $hasDeliveryMethod = null;
}
