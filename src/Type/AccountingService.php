<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AccountingService.
 *
 * Accountancy business.
 *
 * As a [[LocalBusiness]] it can be described as a [[provider]] of one or more
 * [[Service]]\(s).
 *
 * @see https://schema.org/AccountingService
 */
class AccountingService extends FinancialService {

    public const SCHEMA_TYPE = 'AccountingService';
}
