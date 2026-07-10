<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Attorney.
 *
 * Professional service: Attorney.
 *
 * This type is deprecated - [[LegalService]] is more inclusive and less
 * ambiguous.
 *
 * @see https://schema.org/Attorney
 */
class Attorney extends LegalService {

    public const SCHEMA_TYPE = 'Attorney';
}
