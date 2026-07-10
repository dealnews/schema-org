<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Physician.
 *
 * An individual physician or a physician's office considered as a
 * [[MedicalOrganization]].
 *
 * @see https://schema.org/Physician
 */
class Physician extends MedicalOrganization {

    public const SCHEMA_TYPE = 'Physician';
}
