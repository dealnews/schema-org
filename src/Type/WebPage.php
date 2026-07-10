<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WebPage.
 *
 * A web page. Every web page is implicitly assumed to be declared to be of
 * type WebPage, so the various properties about that webpage, such as
 * <code>breadcrumb</code> may be used. We recommend explicit declaration if
 * these properties are specified, but if they are found outside of an
 * itemscope, they will be assumed to be about the page.
 *
 * @see https://schema.org/WebPage
 */
class WebPage extends CreativeWork {

    public const SCHEMA_TYPE = 'WebPage';

    /**
     * A set of links that can help a user understand and navigate a website
     * hierarchy.
     *
     * @var BreadcrumbList|string|array|null
     *
     * @see https://schema.org/breadcrumb
     */
    public BreadcrumbList|string|array|null $breadcrumb = null;

    /**
     * Date on which the content on this web page was last reviewed for accuracy
     * and/or completeness.
     *
     * @var string|array|null
     *
     * @see https://schema.org/lastReviewed
     */
    public string|array|null $lastReviewed = null;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @var WebPageElement|array|null
     *
     * @see https://schema.org/mainContentOfPage
     */
    public WebPageElement|array|null $mainContentOfPage = null;

    /**
     * Indicates the main image on the page.
     *
     * @var ImageObject|array|null
     *
     * @see https://schema.org/primaryImageOfPage
     */
    public ImageObject|array|null $primaryImageOfPage = null;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @var string|array|null
     *
     * @see https://schema.org/relatedLink
     */
    public string|array|null $relatedLink = null;

    /**
     * People or organizations that have reviewed the content on this web page for
     * accuracy and/or completeness.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/reviewedBy
     */
    public Organization|Person|array|null $reviewedBy = null;

    /**
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     *
     * @var string|array|null
     *
     * @see https://schema.org/significantLink
     */
    public string|array|null $significantLink = null;

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

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @var string|array|null
     *
     * @see https://schema.org/specialty
     */
    public string|array|null $specialty = null;
}
