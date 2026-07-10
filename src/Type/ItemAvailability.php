<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ItemAvailability.
 *
 * A list of possible product availability options.
 *
 * @see https://schema.org/ItemAvailability
 */
class ItemAvailability extends Enumeration {

    public const SCHEMA_TYPE = 'ItemAvailability';

    public const BACK_ORDER = 'https://schema.org/BackOrder';
    public const DISCONTINUED = 'https://schema.org/Discontinued';
    public const IN_STOCK = 'https://schema.org/InStock';
    public const IN_STORE_ONLY = 'https://schema.org/InStoreOnly';
    public const LIMITED_AVAILABILITY = 'https://schema.org/LimitedAvailability';
    public const MADE_TO_ORDER = 'https://schema.org/MadeToOrder';
    public const ONLINE_ONLY = 'https://schema.org/OnlineOnly';
    public const OUT_OF_STOCK = 'https://schema.org/OutOfStock';
    public const PRE_ORDER = 'https://schema.org/PreOrder';
    public const PRE_SALE = 'https://schema.org/PreSale';
    public const RESERVED = 'https://schema.org/Reserved';
    public const SOLD_OUT = 'https://schema.org/SoldOut';
}
