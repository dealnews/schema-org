<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TypeAndQuantityNode.
 *
 * A structured value indicating the quantity, unit of measurement, and
 * business function of goods included in a bundle offer.
 *
 * @see https://schema.org/TypeAndQuantityNode
 */
class TypeAndQuantityNode extends StructuredValue {

    public const SCHEMA_TYPE = 'TypeAndQuantityNode';

    /**
     * The quantity of the goods included in the offer.
     *
     * @var int|float|array|null
     *
     * @see https://schema.org/amountOfThisGood
     */
    public int|float|array|null $amountOfThisGood = null;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @var string|array|null
     *
     * @see https://schema.org/businessFunction
     */
    public string|array|null $businessFunction = null;

    /**
     * The product that this structured value is referring to.
     *
     * @var Product|Service|array|null
     *
     * @see https://schema.org/typeOfGood
     */
    public Product|Service|array|null $typeOfGood = null;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
     * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
     * prefix followed by a colon.
     *
     * @var string|array|null
     *
     * @see https://schema.org/unitCode
     */
    public string|array|null $unitCode = null;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @var string|array|null
     *
     * @see https://schema.org/unitText
     */
    public string|array|null $unitText = null;
}
