<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * AuthorizeAction.
 *
 * The act of granting permission to an object.
 *
 * @see https://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction {

    public const SCHEMA_TYPE = 'AuthorizeAction';

    /**
     * A sub property of participant. The participant who is at the receiving end
     * of the action.
     *
     * @var Audience|ContactPoint|Organization|Person|array|null
     *
     * @see https://schema.org/recipient
     */
    public Audience|ContactPoint|Organization|Person|array|null $recipient = null;
}
