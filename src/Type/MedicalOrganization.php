<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MedicalOrganization.
 *
 * A medical organization (physical or not), such as hospital, institution or
 * clinic.
 *
 * @see https://schema.org/MedicalOrganization
 */
class MedicalOrganization extends Organization {

    public const SCHEMA_TYPE = 'MedicalOrganization';
}
