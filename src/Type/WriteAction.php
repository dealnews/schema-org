<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WriteAction.
 *
 * The act of authoring written creative content.
 *
 * @see https://schema.org/WriteAction
 */
class WriteAction extends CreateAction {

    public const SCHEMA_TYPE = 'WriteAction';

    /**
     * The language of the content or performance or used in an action. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @var Language|string|Language[]|string[]|null
     *
     * @see https://schema.org/inLanguage
     */
    public Language|string|array|null $inLanguage = null;
}
