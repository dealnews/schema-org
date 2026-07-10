<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CurrencyConversionService.
 *
 * A service to convert funds from one currency to another currency.
 *
 * @see https://schema.org/CurrencyConversionService
 */
class CurrencyConversionService extends FinancialProduct {

    public const SCHEMA_TYPE = 'CurrencyConversionService';
}
