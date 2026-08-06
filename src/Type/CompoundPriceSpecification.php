<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CompoundPriceSpecification.
 *
 * A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the
 * dimension of a price component (e.g. "electricity" or "final cleaning").
 *
 * @see https://schema.org/CompoundPriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification {

    public const SCHEMA_TYPE = 'CompoundPriceSpecification';

    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in
     * parallel for the [[CompoundPriceSpecification]] node.
     *
     * @var PriceSpecification|PriceSpecification[]|null
     *
     * @see https://schema.org/priceComponent
     */
    public PriceSpecification|array|null $priceComponent = null;

    /**
     * Defines the type of a price specified for an offered product, for example a
     * list price, a (temporary) sale price or a manufacturer suggested retail
     * price. If multiple prices are specified for an offer the [[priceType]]
     * property can be used to identify the type of each such specified price. The
     * value of priceType can be specified as a value from enumeration
     * PriceTypeEnumeration or, a UN/EDIFACT 5387 code, or as a free form text
     * string for price types that are not already predefined in
     * PriceTypeEnumeration.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/priceType
     */
    public string|array|null $priceType = null;
}
