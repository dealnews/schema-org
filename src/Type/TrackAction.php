<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TrackAction.
 *
 * An agent tracks an object for updates.
 *
 * Related actions:
 *
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest
 * on the location of innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the
 * interest on the location of innanimate objects.
 *
 * @see https://schema.org/TrackAction
 */
class TrackAction extends FindAction {

    public const SCHEMA_TYPE = 'TrackAction';

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/deliveryMethod
     */
    public string|array|null $deliveryMethod = null;
}
