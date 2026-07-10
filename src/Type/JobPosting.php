<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * JobPosting.
 *
 * A listing that describes a job opening in a certain organization.
 *
 * @see https://schema.org/JobPosting
 */
class JobPosting extends Intangible {

    public const SCHEMA_TYPE = 'JobPosting';

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @var MonetaryAmount|int|float|PriceSpecification|array|null
     *
     * @see https://schema.org/baseSalary
     */
    public MonetaryAmount|int|float|PriceSpecification|array|null $baseSalary = null;

    /**
     * Publication date of an online listing.
     *
     * @var string|array|null
     *
     * @see https://schema.org/datePosted
     */
    public string|array|null $datePosted = null;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     *
     * @var string|array|null
     *
     * @see https://schema.org/employmentType
     */
    public string|array|null $employmentType = null;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of
     * variables including, but not limited to industry, job title, and location.
     * Estimated salaries  are often computed by outside organizations rather than
     * the hiring organization, who may not have committed to the estimated value.
     *
     * @var MonetaryAmount|MonetaryAmountDistribution|int|float|array|null
     *
     * @see https://schema.org/estimatedSalary
     */
    public MonetaryAmount|MonetaryAmountDistribution|int|float|array|null $estimatedSalary = null;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/experienceRequirements
     */
    public string|array|null $experienceRequirements = null;

    /**
     * Organization or Person offering the job position.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/hiringOrganization
     */
    public Organization|Person|array|null $hiringOrganization = null;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @var string|array|null
     *
     * @see https://schema.org/incentiveCompensation
     */
    public string|array|null $incentiveCompensation = null;

    /**
     * The industry associated with the job position.
     *
     * @var string|array|null
     *
     * @see https://schema.org/industry
     */
    public string|array|null $industry = null;

    /**
     * Description of benefits associated with the job.
     *
     * @var string|array|null
     *
     * @see https://schema.org/jobBenefits
     */
    public string|array|null $jobBenefits = null;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/jobLocation
     */
    public Place|array|null $jobLocation = null;

    /**
     * The Occupation for the JobPosting.
     *
     * @var Occupation|array|null
     *
     * @see https://schema.org/relevantOccupation
     */
    public Occupation|array|null $relevantOccupation = null;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/responsibilities
     */
    public string|array|null $responsibilities = null;

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217))
     * used for the main salary information in this job posting or for this
     * employee.
     *
     * @var string|array|null
     *
     * @see https://schema.org/salaryCurrency
     */
    public string|array|null $salaryCurrency = null;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is either claimed by a person, an organization
     * or desired or required to fulfill a role or to work in an occupation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/skills
     */
    public string|array|null $skills = null;

    /**
     * Any special commitments associated with this job posting. Valid entries
     * include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @var string|array|null
     *
     * @see https://schema.org/specialCommitments
     */
    public string|array|null $specialCommitments = null;

    /**
     * The title of the job.
     *
     * @var string|array|null
     *
     * @see https://schema.org/title
     */
    public string|array|null $title = null;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @var string|array|null
     *
     * @see https://schema.org/validThrough
     */
    public string|array|null $validThrough = null;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift,
     * 8am-5pm).
     *
     * @var string|array|null
     *
     * @see https://schema.org/workHours
     */
    public string|array|null $workHours = null;
}
