<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AlignmentObject.
 *
 * An intangible item that describes an alignment between a learning resource
 * and a node in an educational framework.
 * Should not be used where the nature of the alignment can be described using
 * a simple property, for example to express that a resource [[teaches]] or
 * [[assesses]] a competency.
 *
 * @see https://schema.org/AlignmentObject
 */
class AlignmentObject extends Intangible {

    public const SCHEMA_TYPE = 'AlignmentObject';

    /**
     * A category of alignment between the learning resource and the framework
     * node. Recommended values include: 'requires', 'textComplexity',
     * 'readingLevel', and 'educationalSubject'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/alignmentType
     */
    public string|array|null $alignmentType = null;

    /**
     * The framework to which the resource being described is aligned.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/educationalFramework
     */
    public string|array|null $educationalFramework = null;

    /**
     * The description of a node in an established educational framework.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/targetDescription
     */
    public string|array|null $targetDescription = null;

    /**
     * The name of a node in an established educational framework.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/targetName
     */
    public string|array|null $targetName = null;

    /**
     * The URL of a node in an established educational framework.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/targetUrl
     */
    public string|array|null $targetUrl = null;
}
