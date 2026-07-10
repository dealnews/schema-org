<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WebPageElement.
 *
 * A web page element, like a table or an image.
 *
 * @see https://schema.org/WebPageElement
 */
class WebPageElement extends CreativeWork {

    public const SCHEMA_TYPE = 'WebPageElement';

    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]].
     * In the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @var string|array|null
     *
     * @see https://schema.org/cssSelector
     */
    public string|array|null $cssSelector = null;

    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the
     * latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @var string|array|null
     *
     * @see https://schema.org/xpath
     */
    public string|array|null $xpath = null;
}
