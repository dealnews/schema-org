<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Permit.
 *
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @see https://schema.org/Permit
 */
class Permit extends Intangible {

    public const SCHEMA_TYPE = 'Permit';

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or
     * [[Certification]].
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/issuedBy
     */
    public Organization|array|null $issuedBy = null;

    /**
     * The service through which the permit was granted.
     *
     * @var Service|Service[]|null
     *
     * @see https://schema.org/issuedThrough
     */
    public Service|array|null $issuedThrough = null;

    /**
     * The target audience for this permit.
     *
     * @var Audience|Audience[]|null
     *
     * @see https://schema.org/permitAudience
     */
    public Audience|array|null $permitAudience = null;

    /**
     * The duration of validity of a permit or similar thing.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validFor
     */
    public string|array|null $validFor = null;

    /**
     * The date when the item becomes valid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validFrom
     */
    public string|array|null $validFrom = null;

    /**
     * The geographic area where the item is valid. Applies for example to a
     * [[Permit]], a [[Certification]], or an
     * [[EducationalOccupationalCredential]].
     *
     * @var AdministrativeArea|AdministrativeArea[]|null
     *
     * @see https://schema.org/validIn
     */
    public AdministrativeArea|array|null $validIn = null;

    /**
     * The date when the item is no longer valid.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/validUntil
     */
    public string|array|null $validUntil = null;
}
