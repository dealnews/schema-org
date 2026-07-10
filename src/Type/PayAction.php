<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PayAction.
 *
 * An agent pays a price to a participant.
 *
 * @see https://schema.org/PayAction
 */
class PayAction extends TradeAction {

    public const SCHEMA_TYPE = 'PayAction';

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
