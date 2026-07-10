<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ChooseAction.
 *
 * The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
 *
 * @see https://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction {

    public const SCHEMA_TYPE = 'ChooseAction';

    /**
     * A sub property of object. The options subject to this action.
     *
     * @var string|Thing|array|null
     *
     * @see https://schema.org/actionOption
     */
    public string|Thing|array|null $actionOption = null;
}
