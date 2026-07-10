<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * FinancialService.
 *
 * Financial services business.
 *
 * @see https://schema.org/FinancialService
 */
class FinancialService extends LocalBusiness {

    public const SCHEMA_TYPE = 'FinancialService';

    /**
     * Description of fees, commissions, and other terms applied either to a class
     * of financial product, or by a financial service organization.
     *
     * @var string|array|null
     *
     * @see https://schema.org/feesAndCommissionsSpecification
     */
    public string|array|null $feesAndCommissionsSpecification = null;
}
