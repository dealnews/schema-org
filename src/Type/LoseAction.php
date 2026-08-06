<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LoseAction.
 *
 * The act of being defeated in a competitive activity.
 *
 * @see https://schema.org/LoseAction
 */
class LoseAction extends AchieveAction {

    public const SCHEMA_TYPE = 'LoseAction';

    /**
     * A sub property of participant. The winner of the action.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/winner
     */
    public Person|array|null $winner = null;
}
