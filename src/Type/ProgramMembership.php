<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ProgramMembership.
 *
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see https://schema.org/ProgramMembership
 */
class ProgramMembership extends Intangible {

    public const SCHEMA_TYPE = 'ProgramMembership';

    /**
     * The Organization (airline, travelers' club, retailer, etc.) the membership
     * is made with or which offers the  MemberProgram.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/hostingOrganization
     */
    public Organization|array|null $hostingOrganization = null;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/member
     */
    public Organization|Person|array|null $member = null;

    /**
     * A unique identifier for the membership.
     *
     * @var string|array|null
     *
     * @see https://schema.org/membershipNumber
     */
    public string|array|null $membershipNumber = null;

    /**
     * The [MemberProgram](https://schema.org/MemberProgram) associated with a
     * [ProgramMembership](https://schema.org/ProgramMembership).
     *
     * @var string|array|null
     *
     * @see https://schema.org/program
     */
    public string|array|null $program = null;

    /**
     * The program providing the membership. It is preferable to use
     * [:program](https://schema.org/program) instead.
     *
     * @var string|array|null
     *
     * @see https://schema.org/programName
     */
    public string|array|null $programName = null;
}
