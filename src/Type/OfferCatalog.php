<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OfferCatalog.
 *
 * An OfferCatalog is an ItemList that contains related Offers and/or further
 * OfferCatalogs that are offeredBy the same provider.
 *
 * @see https://schema.org/OfferCatalog
 */
class OfferCatalog extends ItemList {

    public const SCHEMA_TYPE = 'OfferCatalog';
}
