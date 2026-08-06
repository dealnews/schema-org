<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SocialMediaPosting.
 *
 * A post to a social media platform, including blog posts, tweets, Facebook
 * posts, etc.
 *
 * @see https://schema.org/SocialMediaPosting
 */
class SocialMediaPosting extends Article {

    public const SCHEMA_TYPE = 'SocialMediaPosting';

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     *
     * @var CreativeWork|CreativeWork[]|null
     *
     * @see https://schema.org/sharedContent
     */
    public CreativeWork|array|null $sharedContent = null;
}
