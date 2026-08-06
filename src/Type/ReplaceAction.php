<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReplaceAction.
 *
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see https://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction {

    public const SCHEMA_TYPE = 'ReplaceAction';

    /**
     * A sub property of object. The object that is being replaced.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/replacee
     */
    public Thing|array|null $replacee = null;

    /**
     * A sub property of object. The object that replaces.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/replacer
     */
    public Thing|array|null $replacer = null;
}
