<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ContactPoint.
 *
 * A contact point—for example, a Customer Complaints department.
 *
 * @see https://schema.org/ContactPoint
 */
class ContactPoint extends StructuredValue {

    public const SCHEMA_TYPE = 'ContactPoint';

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @var AdministrativeArea|GeoShape|Place|string|AdministrativeArea[]|GeoShape[]|Place[]|string[]|null
     *
     * @see https://schema.org/areaServed
     */
    public AdministrativeArea|GeoShape|Place|string|array|null $areaServed = null;

    /**
     * A language someone may use with or at the item, service or place. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @var Language|string|Language[]|string[]|null
     *
     * @see https://schema.org/availableLanguage
     */
    public Language|string|array|null $availableLanguage = null;

    /**
     * An option available on this contact point (e.g. a toll-free number or
     * support for hearing-impaired callers).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/contactOption
     */
    public string|array|null $contactOption = null;

    /**
     * A person or organization can have different contact points, for different
     * purposes. For example, a sales contact point, a PR contact point and so on.
     * This property is used to specify the kind of contact point.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/contactType
     */
    public string|array|null $contactType = null;

    /**
     * Email address.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/email
     */
    public string|array|null $email = null;

    /**
     * The fax number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/faxNumber
     */
    public string|array|null $faxNumber = null;

    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification|OpeningHoursSpecification[]|null
     *
     * @see https://schema.org/hoursAvailable
     */
    public OpeningHoursSpecification|array|null $hoursAvailable = null;

    /**
     * The product or service this support contact point is related to (such as
     * product support for a particular product line). This can be a specific
     * product or product line (e.g. "iPhone") or a general category of products or
     * services (e.g. "smartphones").
     *
     * @var Product|string|Product[]|string[]|null
     *
     * @see https://schema.org/productSupported
     */
    public Product|string|array|null $productSupported = null;

    /**
     * The telephone number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/telephone
     */
    public string|array|null $telephone = null;
}
