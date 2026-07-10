<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BusinessAudience.
 *
 * A set of characteristics belonging to businesses, e.g. who compose an item's
 * target audience.
 *
 * @see https://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience {

    public const SCHEMA_TYPE = 'BusinessAudience';

    /**
     * The number of employees in an organization, e.g. business.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/numberOfEmployees
     */
    public QuantitativeValue|array|null $numberOfEmployees = null;

    /**
     * The size of the business in annual revenue.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/yearlyRevenue
     */
    public QuantitativeValue|array|null $yearlyRevenue = null;

    /**
     * The age of the business.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/yearsInOperation
     */
    public QuantitativeValue|array|null $yearsInOperation = null;
}
