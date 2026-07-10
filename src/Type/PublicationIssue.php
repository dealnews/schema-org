<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PublicationIssue.
 *
 * A part of a successively published publication such as a periodical or
 * publication volume, often numbered, usually containing a grouping of works
 * such as articles.
 *
 * See also [blog
 * post](https://blog-schema.org/2014/09/02/schema-org-support-for-bibliographic-relationships-and-periodicals/).
 *
 * @see https://schema.org/PublicationIssue
 */
class PublicationIssue extends CreativeWork {

    public const SCHEMA_TYPE = 'PublicationIssue';

    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     *
     * @var int|string|array|null
     *
     * @see https://schema.org/issueNumber
     */
    public int|string|array|null $issueNumber = null;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @var int|string|array|null
     *
     * @see https://schema.org/pageEnd
     */
    public int|string|array|null $pageEnd = null;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @var int|string|array|null
     *
     * @see https://schema.org/pageStart
     */
    public int|string|array|null $pageStart = null;

    /**
     * Any description of pages that is not separated into pageStart and pageEnd;
     * for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @var string|array|null
     *
     * @see https://schema.org/pagination
     */
    public string|array|null $pagination = null;
}
