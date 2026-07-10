<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ItemListOrderType.
 *
 * Enumerated for values for itemListOrder for indicating how an ordered
 * ItemList is organized.
 *
 * @see https://schema.org/ItemListOrderType
 */
class ItemListOrderType extends Enumeration {

    public const SCHEMA_TYPE = 'ItemListOrderType';

    public const ITEM_LIST_ORDER_ASCENDING = 'https://schema.org/ItemListOrderAscending';
    public const ITEM_LIST_ORDER_DESCENDING = 'https://schema.org/ItemListOrderDescending';
    public const ITEM_LIST_UNORDERED = 'https://schema.org/ItemListUnordered';
}
