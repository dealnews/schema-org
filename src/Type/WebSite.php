<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WebSite.
 *
 * A WebSite is a set of related web pages and other items typically served
 * from a single web domain and accessible via URLs.
 *
 * @see https://schema.org/WebSite
 */
class WebSite extends CreativeWork {

    public const SCHEMA_TYPE = 'WebSite';

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string|array|null
     *
     * @see https://schema.org/issn
     */
    public string|array|null $issn = null;
}
