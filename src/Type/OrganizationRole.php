<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OrganizationRole.
 *
 * A subclass of Role used to describe roles within organizations.
 *
 * @see https://schema.org/OrganizationRole
 */
class OrganizationRole extends Role {

    public const SCHEMA_TYPE = 'OrganizationRole';

    /**
     * A number associated with a role in an organization, for example, the number
     * on an athlete's jersey.
     *
     * @var int|float|array|null
     *
     * @see https://schema.org/numberedPosition
     */
    public int|float|array|null $numberedPosition = null;
}
