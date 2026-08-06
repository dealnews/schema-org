<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReturnAction.
 *
 * The act of returning to the origin that which was previously received
 * (concrete objects) or taken (ownership).
 *
 * @see https://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction {

    public const SCHEMA_TYPE = 'ReturnAction';

    /**
     * A sub property of participant. The participant who is at the receiving end
     * of the action.
     *
     * @var Audience|ContactPoint|Organization|Person|Audience[]|ContactPoint[]|Organization[]|Person[]|null
     *
     * @see https://schema.org/recipient
     */
    public Audience|ContactPoint|Organization|Person|array|null $recipient = null;
}
