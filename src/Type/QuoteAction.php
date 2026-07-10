<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * QuoteAction.
 *
 * An agent quotes/estimates/appraises an object/product/service with a price
 * at a location/store.
 *
 * @see https://schema.org/QuoteAction
 */
class QuoteAction extends TradeAction {

    public const SCHEMA_TYPE = 'QuoteAction';
}
