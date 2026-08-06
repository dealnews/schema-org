<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EntryPoint.
 *
 * An entry point, within some Web-based protocol.
 *
 * @see https://schema.org/EntryPoint
 */
class EntryPoint extends Intangible {

    public const SCHEMA_TYPE = 'EntryPoint';

    /**
     * An application that can complete the request.
     *
     * @var SoftwareApplication|SoftwareApplication[]|null
     *
     * @see https://schema.org/actionApplication
     */
    public SoftwareApplication|array|null $actionApplication = null;

    /**
     * The high level platform(s) where the Action can be performed for the given
     * URL. To specify a specific application or operating system instance, use
     * actionApplication.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/actionPlatform
     */
    public string|array|null $actionPlatform = null;

    /**
     * The supported content type(s) for an EntryPoint response.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/contentType
     */
    public string|array|null $contentType = null;

    /**
     * The supported encoding type(s) for an EntryPoint request.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/encodingType
     */
    public string|array|null $encodingType = null;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to
     * an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/httpMethod
     */
    public string|array|null $httpMethod = null;

    /**
     * An url template (RFC6570) that will be used to construct the target of the
     * execution of the action.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/urlTemplate
     */
    public string|array|null $urlTemplate = null;
}
