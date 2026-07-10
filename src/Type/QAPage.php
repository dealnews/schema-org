<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * QAPage.
 *
 * A QAPage is a WebPage focussed on a specific Question and its Answer(s),
 * e.g. in a question answering site or documenting Frequently Asked Questions
 * (FAQs).
 *
 * @see https://schema.org/QAPage
 */
class QAPage extends WebPage {

    public const SCHEMA_TYPE = 'QAPage';
}
