<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Blog.
 *
 * A [blog](https://en.wikipedia.org/wiki/Blog), sometimes known as a "weblog".
 * Note that the individual posts ([[BlogPosting]]s) in a [[Blog]] are often
 * colloquially referred to by the same term.
 *
 * @see https://schema.org/Blog
 */
class Blog extends CreativeWork {

    public const SCHEMA_TYPE = 'Blog';

    /**
     * A posting that is part of this blog.
     *
     * @var BlogPosting|BlogPosting[]|null
     *
     * @see https://schema.org/blogPost
     */
    public BlogPosting|array|null $blogPost = null;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/issn
     */
    public string|array|null $issn = null;
}
