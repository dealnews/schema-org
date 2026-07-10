<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GiveAction.
 *
 * The act of transferring ownership of an object to a destination. Reciprocal
 * of TakeAction.
 *
 * Related actions:
 *
 * * [[TakeAction]]: Reciprocal of GiveAction.
 * * [[SendAction]]: Unlike SendAction, GiveAction implies that ownership is
 * being transferred (e.g. I may send my laptop to you, but that doesn't mean
 * I'm giving it to you).
 *
 * @see https://schema.org/GiveAction
 */
class GiveAction extends TransferAction {

    public const SCHEMA_TYPE = 'GiveAction';

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
