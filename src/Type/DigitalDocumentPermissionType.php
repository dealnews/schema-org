<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DigitalDocumentPermissionType.
 *
 * A type of permission which can be granted for accessing a digital document.
 *
 * @see https://schema.org/DigitalDocumentPermissionType
 */
class DigitalDocumentPermissionType extends Enumeration {

    public const SCHEMA_TYPE = 'DigitalDocumentPermissionType';

    public const COMMENT_PERMISSION = 'https://schema.org/CommentPermission';
    public const READ_PERMISSION = 'https://schema.org/ReadPermission';
    public const WRITE_PERMISSION = 'https://schema.org/WritePermission';
}
