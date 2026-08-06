<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OrderAction.
 *
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see https://schema.org/OrderAction
 */
class OrderAction extends TradeAction {

    public const SCHEMA_TYPE = 'OrderAction';

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/deliveryMethod
     */
    public string|array|null $deliveryMethod = null;
}
