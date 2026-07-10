<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GovernmentService.
 *
 * A service provided by a government organization, e.g. food stamps, veterans
 * benefits, etc.
 *
 * @see https://schema.org/GovernmentService
 */
class GovernmentService extends Service {

    public const SCHEMA_TYPE = 'GovernmentService';

    /**
     * The operating organization, if different from the provider.  This enables
     * the representation of services that are provided by an organization, but
     * operated by another organization like a subcontractor.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/serviceOperator
     */
    public Organization|array|null $serviceOperator = null;
}
