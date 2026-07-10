<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WebApplication.
 *
 * Web applications.
 *
 * @see https://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication {

    public const SCHEMA_TYPE = 'WebApplication';

    /**
     * Specifies browser requirements in human-readable text. For example,
     * 'requires HTML5 support'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/browserRequirements
     */
    public string|array|null $browserRequirements = null;
}
