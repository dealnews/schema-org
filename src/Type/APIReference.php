<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * APIReference.
 *
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see https://schema.org/APIReference
 */
class APIReference extends TechArticle {

    public const SCHEMA_TYPE = 'APIReference';

    /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
     *
     * @var string|array|null
     *
     * @see https://schema.org/assemblyVersion
     */
    public string|array|null $assemblyVersion = null;

    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     *
     * @var string|array|null
     *
     * @see https://schema.org/executableLibraryName
     */
    public string|array|null $executableLibraryName = null;

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @var string|array|null
     *
     * @see https://schema.org/programmingModel
     */
    public string|array|null $programmingModel = null;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @var string|array|null
     *
     * @see https://schema.org/targetPlatform
     */
    public string|array|null $targetPlatform = null;
}
