<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CommentAction.
 *
 * The act of generating a comment about a subject.
 *
 * @see https://schema.org/CommentAction
 */
class CommentAction extends CommunicateAction {

    public const SCHEMA_TYPE = 'CommentAction';

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
