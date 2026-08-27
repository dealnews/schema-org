<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DefinedTerm.
 *
 * A word, name, acronym, phrase, etc. with a formal definition. Often used in
 * the context of category or subject classification, glossaries or
 * dictionaries, product or creative work types, etc. Use the name property for
 * the term being defined, use termCode if the term has an alpha-numeric code
 * allocated, use description to provide the definition of the term. Use the
 * about property to specify what the term is about.
 *
 * @see https://schema.org/DefinedTerm
 */
class DefinedTerm extends Intangible {

    public const SCHEMA_TYPE = 'DefinedTerm';

    /**
     * The subject matter of an object.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/about
     */
    public Thing|array|null $about = null;
}
