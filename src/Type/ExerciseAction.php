<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ExerciseAction.
 *
 * The act of participating in exertive activity for the purposes of improving
 * health and fitness.
 *
 * @see https://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction {

    public const SCHEMA_TYPE = 'ExerciseAction';

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @var string|array|null
     *
     * @see https://schema.org/distance
     */
    public string|array|null $distance = null;

    /**
     * A sub property of location. The course where this action was taken.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/exerciseCourse
     */
    public Place|array|null $exerciseCourse = null;

    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/fromLocation
     */
    public Place|array|null $fromLocation = null;

    /**
     * A sub property of participant. The opponent on this action.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/opponent
     */
    public Person|array|null $opponent = null;

    /**
     * A sub property of location. The sports activity location where this action
     * occurred.
     *
     * @var SportsActivityLocation|array|null
     *
     * @see https://schema.org/sportsActivityLocation
     */
    public SportsActivityLocation|array|null $sportsActivityLocation = null;

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @var SportsEvent|array|null
     *
     * @see https://schema.org/sportsEvent
     */
    public SportsEvent|array|null $sportsEvent = null;

    /**
     * A sub property of participant. The sports team that participated on this
     * action.
     *
     * @var SportsTeam|array|null
     *
     * @see https://schema.org/sportsTeam
     */
    public SportsTeam|array|null $sportsTeam = null;

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/toLocation
     */
    public Place|array|null $toLocation = null;
}
