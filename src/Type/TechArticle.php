<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TechArticle.
 *
 * A technical article - Example: How-to (task) topics, step-by-step,
 * procedural troubleshooting, specifications, etc.
 *
 * @see https://schema.org/TechArticle
 */
class TechArticle extends Article {

    public const SCHEMA_TYPE = 'TechArticle';

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/dependencies
     */
    public string|array|null $dependencies = null;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/proficiencyLevel
     */
    public string|array|null $proficiencyLevel = null;
}
