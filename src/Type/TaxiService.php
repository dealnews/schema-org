<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TaxiService.
 *
 * A service for a vehicle for hire with a driver for local travel. Fares are
 * usually calculated based on distance traveled.
 *
 * @see https://schema.org/TaxiService
 */
class TaxiService extends Service {

    public const SCHEMA_TYPE = 'TaxiService';
}
