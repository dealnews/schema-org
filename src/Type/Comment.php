<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Comment.
 *
 * A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the [[text]] property, and its topic via [[about]],
 * properties shared with all CreativeWorks.
 *
 * @see https://schema.org/Comment
 */
class Comment extends CreativeWork {

    public const SCHEMA_TYPE = 'Comment';

    /**
     * The number of downvotes this question, answer or comment has received from
     * the community.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/downvoteCount
     */
    public int|array|null $downvoteCount = null;

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A
     * discussion threads e.g. a chain of comments with the first comment being an
     * [[Article]] or other [[CreativeWork]]. See also [[comment]] which points
     * from something to a comment about it.
     *
     * @var Comment|CreativeWork|Comment[]|CreativeWork[]|null
     *
     * @see https://schema.org/parentItem
     */
    public Comment|CreativeWork|array|null $parentItem = null;

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this
     * posting.
     *
     * @var CreativeWork|CreativeWork[]|null
     *
     * @see https://schema.org/sharedContent
     */
    public CreativeWork|array|null $sharedContent = null;

    /**
     * The number of upvotes this question, answer or comment has received from the
     * community.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/upvoteCount
     */
    public int|array|null $upvoteCount = null;
}
