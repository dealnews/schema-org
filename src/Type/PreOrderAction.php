<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PreOrderAction.
 *
 * An agent orders a (not yet released) object/product/service to be
 * delivered/sent.
 *
 * @see https://schema.org/PreOrderAction
 */
class PreOrderAction extends TradeAction {

    public const SCHEMA_TYPE = 'PreOrderAction';
}
