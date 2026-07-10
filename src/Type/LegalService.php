<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LegalService.
 *
 * A LegalService is a business that provides legally-oriented services, advice
 * and representation, e.g. law firms.
 *
 * As a [[LocalBusiness]] it can be described as a [[provider]] of one or more
 * [[Service]]\(s).
 *
 * @see https://schema.org/LegalService
 */
class LegalService extends LocalBusiness {

    public const SCHEMA_TYPE = 'LegalService';
}
