<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Article.
 *
 * An article, such as a news article or piece of investigative report.
 * Newspapers and magazines have articles of many different types and this is
 * intended to cover them all.
 *
 * See also [blog
 * post](https://blog.schema.org/2014/09/02/schema-org-support-for-bibliographic-relationships-and-periodicals/).
 *
 * @see https://schema.org/Article
 */
class Article extends CreativeWork {

    public const SCHEMA_TYPE = 'Article';

    /**
     * The actual body of the article.
     *
     * @var string|array|null
     *
     * @see https://schema.org/articleBody
     */
    public string|array|null $articleBody = null;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper,
     * such as Sports, Lifestyle, etc.
     *
     * @var string|array|null
     *
     * @see https://schema.org/articleSection
     */
    public string|array|null $articleSection = null;

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

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the
     * sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully
     * spoken in particular circumstances; the 'speakable' property serves to
     * indicate the parts most likely to be generally useful for speech.
     *
     * The *speakable* property can be repeated an arbitrary number of times, with
     * three kinds of possible 'content-locator' values:
     *
     * 1.) *id-value* URL references - uses *id-value* of an element in the page
     * being annotated. The simplest use of *speakable* has (potentially relative)
     * URL values, referencing identified sections of the document concerned.
     *
     * 2.) CSS Selectors - addresses content in the annotated page, e.g. via class
     * attribute. Use the [[cssSelector]] property.
     *
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
     * content). Use the [[xpath]] property.
     *
     *
     * For more sophisticated markup of speakable sections beyond simple ID
     * references, either CSS selectors or XPath expressions to pick out document
     * section(s) as speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined to
     * be a possible value of the *speakable* property.
     *
     * @var SpeakableSpecification|string|array|null
     *
     * @see https://schema.org/speakable
     */
    public SpeakableSpecification|string|array|null $speakable = null;
}
