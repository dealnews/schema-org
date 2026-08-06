<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LiveBlogPosting.
 *
 * A [[LiveBlogPosting]] is a [[BlogPosting]] intended to provide a rolling
 * textual coverage of an ongoing event through continuous updates.
 *
 * @see https://schema.org/LiveBlogPosting
 */
class LiveBlogPosting extends BlogPosting {

    public const SCHEMA_TYPE = 'LiveBlogPosting';

    /**
     * The time when the live blog will stop covering the Event. Note that coverage
     * may continue after the Event concludes.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/coverageEndTime
     */
    public string|array|null $coverageEndTime = null;

    /**
     * The time when the live blog will begin covering the Event. Note that
     * coverage may begin before the Event's start time. The LiveBlogPosting may
     * also be created before coverage begins.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/coverageStartTime
     */
    public string|array|null $coverageStartTime = null;

    /**
     * An update to the LiveBlog.
     *
     * @var BlogPosting|BlogPosting[]|null
     *
     * @see https://schema.org/liveBlogUpdate
     */
    public BlogPosting|array|null $liveBlogUpdate = null;
}
