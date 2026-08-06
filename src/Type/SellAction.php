<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SellAction.
 *
 * The act of taking money from a buyer in exchange for goods or services
 * rendered. An agent sells an object, product, or service to a buyer for a
 * price. Reciprocal of BuyAction.
 *
 * @see https://schema.org/SellAction
 */
class SellAction extends TradeAction {

    public const SCHEMA_TYPE = 'SellAction';

    /**
     * A sub property of participant. The participant/person/organization that
     * bought the object.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/buyer
     */
    public Organization|Person|array|null $buyer = null;
}
