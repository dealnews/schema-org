<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReplyAction.
 *
 * The act of responding to a question/message asked/sent by the object.
 * Related to [[AskAction]].
 *
 * Related actions:
 *
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
 *
 * @see https://schema.org/ReplyAction
 */
class ReplyAction extends CommunicateAction {

    public const SCHEMA_TYPE = 'ReplyAction';

    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @var Comment|Comment[]|null
     *
     * @see https://schema.org/resultComment
     */
    public Comment|array|null $resultComment = null;
}
