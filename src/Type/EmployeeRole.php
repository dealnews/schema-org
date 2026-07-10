<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EmployeeRole.
 *
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see https://schema.org/EmployeeRole
 */
class EmployeeRole extends OrganizationRole {

    public const SCHEMA_TYPE = 'EmployeeRole';

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @var MonetaryAmount|int|float|PriceSpecification|array|null
     *
     * @see https://schema.org/baseSalary
     */
    public MonetaryAmount|int|float|PriceSpecification|array|null $baseSalary = null;

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
}
