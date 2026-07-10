<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * IndividualPhysician.
 *
 * An individual medical practitioner. For their official address use
 * [[address]], for affiliations to hospitals use [[hospitalAffiliation]].
 * The [[practicesAt]] property can be used to indicate [[MedicalOrganization]]
 * hospitals, clinics, pharmacies etc. where this physician practices.
 *
 * @see https://schema.org/IndividualPhysician
 */
class IndividualPhysician extends Physician {

    public const SCHEMA_TYPE = 'IndividualPhysician';
}
