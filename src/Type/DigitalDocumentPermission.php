<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DigitalDocumentPermission.
 *
 * A permission for a particular person or group to access a particular file.
 *
 * @see https://schema.org/DigitalDocumentPermission
 */
class DigitalDocumentPermission extends Intangible {

    public const SCHEMA_TYPE = 'DigitalDocumentPermission';

    /**
     * The person, organization, contact point, or audience that has been granted
     * this permission.
     *
     * @var Audience|ContactPoint|Organization|Person|Audience[]|ContactPoint[]|Organization[]|Person[]|null
     *
     * @see https://schema.org/grantee
     */
    public Audience|ContactPoint|Organization|Person|array|null $grantee = null;

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/permissionType
     */
    public string|array|null $permissionType = null;
}
