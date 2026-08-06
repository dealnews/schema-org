<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * WinAction.
 *
 * The act of achieving victory in a competitive activity.
 *
 * @see https://schema.org/WinAction
 */
class WinAction extends AchieveAction {

    public const SCHEMA_TYPE = 'WinAction';

    /**
     * A sub property of participant. The loser of the action.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/loser
     */
    public Person|array|null $loser = null;
}
