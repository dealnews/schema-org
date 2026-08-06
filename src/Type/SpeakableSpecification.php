<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SpeakableSpecification.
 *
 * A SpeakableSpecification indicates (typically via [[xpath]] or
 * [[cssSelector]]) sections of a document that are highlighted as particularly
 * [[speakable]]. Instances of this type are expected to be used primarily as
 * values of the [[speakable]] property.
 *
 * @see https://schema.org/SpeakableSpecification
 */
class SpeakableSpecification extends Intangible {

    public const SCHEMA_TYPE = 'SpeakableSpecification';

    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]].
     * In the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/cssSelector
     */
    public string|array|null $cssSelector = null;

    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the
     * latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/xpath
     */
    public string|array|null $xpath = null;
}
