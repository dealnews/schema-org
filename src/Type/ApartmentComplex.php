<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ApartmentComplex.
 *
 * Residence type: Apartment complex.
 *
 * @see https://schema.org/ApartmentComplex
 */
class ApartmentComplex extends Residence {

    public const SCHEMA_TYPE = 'ApartmentComplex';

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var bool|string|array|null
     *
     * @see https://schema.org/petsAllowed
     */
    public bool|string|array|null $petsAllowed = null;
}
