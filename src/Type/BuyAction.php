<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BuyAction.
 *
 * The act of giving money to a seller in exchange for goods or services
 * rendered. An agent buys an object, product, or service from a seller for a
 * price. Reciprocal of SellAction.
 *
 * @see https://schema.org/BuyAction
 */
class BuyAction extends TradeAction {

    public const SCHEMA_TYPE = 'BuyAction';

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/seller
     */
    public Organization|Person|array|null $seller = null;
}
