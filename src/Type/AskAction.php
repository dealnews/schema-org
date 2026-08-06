<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AskAction.
 *
 * The act of posing a question / favor to someone.
 *
 * Related actions:
 *
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
 *
 * @see https://schema.org/AskAction
 */
class AskAction extends CommunicateAction {

    public const SCHEMA_TYPE = 'AskAction';

    /**
     * A sub property of object. A question.
     *
     * @var Question|Question[]|null
     *
     * @see https://schema.org/question
     */
    public Question|array|null $question = null;
}
