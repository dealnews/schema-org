<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OwnershipInfo.
 *
 * A structured value providing information about when a certain organization
 * or person owned a certain product.
 *
 * @see https://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue {

    public const SCHEMA_TYPE = 'OwnershipInfo';

    /**
     * The organization or person from which the product was acquired.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/acquiredFrom
     */
    public Organization|Person|array|null $acquiredFrom = null;

    /**
     * The date and time of obtaining the product.
     *
     * @var string|array|null
     *
     * @see https://schema.org/ownedFrom
     */
    public string|array|null $ownedFrom = null;

    /**
     * The date and time of giving up ownership on the product.
     *
     * @var string|array|null
     *
     * @see https://schema.org/ownedThrough
     */
    public string|array|null $ownedThrough = null;

    /**
     * The product that this structured value is referring to.
     *
     * @var Product|Service|array|null
     *
     * @see https://schema.org/typeOfGood
     */
    public Product|Service|array|null $typeOfGood = null;
}
