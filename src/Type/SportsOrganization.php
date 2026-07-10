<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SportsOrganization.
 *
 * Represents the collection of all sports organizations, including sports
 * teams, governing bodies, and sports associations.
 *
 * @see https://schema.org/SportsOrganization
 */
class SportsOrganization extends Organization {

    public const SCHEMA_TYPE = 'SportsOrganization';
}
