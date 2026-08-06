<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TipAction.
 *
 * The act of giving money voluntarily to a beneficiary in recognition of
 * services rendered.
 *
 * @see https://schema.org/TipAction
 */
class TipAction extends TradeAction {

    public const SCHEMA_TYPE = 'TipAction';

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
