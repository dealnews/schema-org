<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SoftwareApplication.
 *
 * A software application.
 *
 * @see https://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork {

    public const SCHEMA_TYPE = 'SoftwareApplication';

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationCategory
     */
    public string|array|null $applicationCategory = null;

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationSubCategory
     */
    public string|array|null $applicationSubCategory = null;

    /**
     * The name of the application suite to which the application belongs (e.g.
     * Excel belongs to Office).
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationSuite
     */
    public string|array|null $applicationSuite = null;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @var string|array|null
     *
     * @see https://schema.org/availableOnDevice
     */
    public string|array|null $availableOnDevice = null;

    /**
     * Countries for which the application is not supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string|array|null
     *
     * @see https://schema.org/countriesNotSupported
     */
    public string|array|null $countriesNotSupported = null;

    /**
     * Countries for which the application is supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string|array|null
     *
     * @see https://schema.org/countriesSupported
     */
    public string|array|null $countriesSupported = null;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @var string|array|null
     *
     * @see https://schema.org/downloadUrl
     */
    public string|array|null $downloadUrl = null;

    /**
     * Features or modules provided by this application (and possibly required by
     * other applications).
     *
     * @var string|array|null
     *
     * @see https://schema.org/featureList
     */
    public string|array|null $featureList = null;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB,
     * KB etc.), KB will be assumed.
     *
     * @var string|array|null
     *
     * @see https://schema.org/fileSize
     */
    public string|array|null $fileSize = null;

    /**
     * URL at which the app may be installed, if different from the URL of the
     * item.
     *
     * @var string|array|null
     *
     * @see https://schema.org/installUrl
     */
    public string|array|null $installUrl = null;

    /**
     * Minimum memory requirements.
     *
     * @var string|array|null
     *
     * @see https://schema.org/memoryRequirements
     */
    public string|array|null $memoryRequirements = null;

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     *
     * @var string|array|null
     *
     * @see https://schema.org/operatingSystem
     */
    public string|array|null $operatingSystem = null;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require
     * full internet access or may run only on wifi).
     *
     * @var string|array|null
     *
     * @see https://schema.org/permissions
     */
    public string|array|null $permissions = null;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @var string|array|null
     *
     * @see https://schema.org/processorRequirements
     */
    public string|array|null $processorRequirements = null;

    /**
     * Description of what changed in this version.
     *
     * @var string|array|null
     *
     * @see https://schema.org/releaseNotes
     */
    public string|array|null $releaseNotes = null;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1,
     * Python 2.3, .NET Framework 3.0).
     *
     * @var string|array|null
     *
     * @see https://schema.org/runtimePlatform
     */
    public string|array|null $runtimePlatform = null;

    /**
     * A link to a screenshot image of the app.
     *
     * @var ImageObject|string|array|null
     *
     * @see https://schema.org/screenshot
     */
    public ImageObject|string|array|null $screenshot = null;

    /**
     * Additional content for a software application.
     *
     * @var SoftwareApplication|array|null
     *
     * @see https://schema.org/softwareAddOn
     */
    public SoftwareApplication|array|null $softwareAddOn = null;

    /**
     * Software application help.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/softwareHelp
     */
    public CreativeWork|array|null $softwareHelp = null;

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (examples:
     * DirectX, Java or .NET runtime).
     *
     * @var SoftwareApplication|string|array|null
     *
     * @see https://schema.org/softwareRequirements
     */
    public SoftwareApplication|string|array|null $softwareRequirements = null;

    /**
     * Version of the software instance.
     *
     * @var string|array|null
     *
     * @see https://schema.org/softwareVersion
     */
    public string|array|null $softwareVersion = null;

    /**
     * Storage requirements (free space required).
     *
     * @var string|array|null
     *
     * @see https://schema.org/storageRequirements
     */
    public string|array|null $storageRequirements = null;

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @var DataFeed|array|null
     *
     * @see https://schema.org/supportingData
     */
    public DataFeed|array|null $supportingData = null;
}
