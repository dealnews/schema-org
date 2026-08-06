<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Occupation.
 *
 * A profession, may involve prolonged training and/or a formal qualification.
 *
 * @see https://schema.org/Occupation
 */
class Occupation extends Intangible {

    public const SCHEMA_TYPE = 'Occupation';

    /**
     * An estimated salary for a job posting or occupation, based on a variety of
     * variables including, but not limited to industry, job title, and location.
     * Estimated salaries  are often computed by outside organizations rather than
     * the hiring organization, who may not have committed to the estimated value.
     *
     * @var MonetaryAmount|MonetaryAmountDistribution|int|float|MonetaryAmount[]|MonetaryAmountDistribution[]|int[]|float[]|null
     *
     * @see https://schema.org/estimatedSalary
     */
    public MonetaryAmount|MonetaryAmountDistribution|int|float|array|null $estimatedSalary = null;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/experienceRequirements
     */
    public string|array|null $experienceRequirements = null;

    /**
     * The region/country for which this occupational description is appropriate.
     * Note that educational requirements and qualifications can vary between
     * jurisdictions.
     *
     * @var AdministrativeArea|AdministrativeArea[]|null
     *
     * @see https://schema.org/occupationLocation
     */
    public AdministrativeArea|array|null $occupationLocation = null;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/responsibilities
     */
    public string|array|null $responsibilities = null;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is either claimed by a person, an organization
     * or desired or required to fulfill a role or to work in an occupation.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/skills
     */
    public string|array|null $skills = null;
}
