<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DigitalDocument.
 *
 * An electronic file or document.
 *
 * @see https://schema.org/DigitalDocument
 */
class DigitalDocument extends CreativeWork {

    public const SCHEMA_TYPE = 'DigitalDocument';

    /**
     * A permission related to the access to this document (e.g. permission to read
     * or write an electronic document). For a public document, specify a grantee
     * with an Audience with audienceType equal to "public".
     *
     * @var DigitalDocumentPermission|array|null
     *
     * @see https://schema.org/hasDigitalDocumentPermission
     */
    public DigitalDocumentPermission|array|null $hasDigitalDocumentPermission = null;
}
