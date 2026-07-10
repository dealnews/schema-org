<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ServiceChannel.
 *
 * A means for accessing a service, e.g. a government office location, web
 * site, or phone number.
 *
 * @see https://schema.org/ServiceChannel
 */
class ServiceChannel extends Intangible {

    public const SCHEMA_TYPE = 'ServiceChannel';

    /**
     * A language someone may use with or at the item, service or place. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @var Language|string|array|null
     *
     * @see https://schema.org/availableLanguage
     */
    public Language|string|array|null $availableLanguage = null;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var string|array|null
     *
     * @see https://schema.org/processingTime
     */
    public string|array|null $processingTime = null;

    /**
     * The service provided by this channel.
     *
     * @var Service|array|null
     *
     * @see https://schema.org/providesService
     */
    public Service|array|null $providesService = null;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can
     * go to access the service.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/serviceLocation
     */
    public Place|array|null $serviceLocation = null;

    /**
     * The phone number to use to access the service.
     *
     * @var ContactPoint|array|null
     *
     * @see https://schema.org/servicePhone
     */
    public ContactPoint|array|null $servicePhone = null;

    /**
     * The address for accessing the service by mail.
     *
     * @var PostalAddress|array|null
     *
     * @see https://schema.org/servicePostalAddress
     */
    public PostalAddress|array|null $servicePostalAddress = null;

    /**
     * The number to access the service by text message.
     *
     * @var ContactPoint|array|null
     *
     * @see https://schema.org/serviceSmsNumber
     */
    public ContactPoint|array|null $serviceSmsNumber = null;

    /**
     * The website to access the service.
     *
     * @var string|array|null
     *
     * @see https://schema.org/serviceUrl
     */
    public string|array|null $serviceUrl = null;
}
