<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SendAction.
 *
 * The act of physically/electronically dispatching an object for transfer from
 * an origin to a destination. Related actions:
 *
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer
 * of ownership (e.g. I can send you my laptop, but I'm not necessarily giving
 * it to you).
 *
 * @see https://schema.org/SendAction
 */
class SendAction extends TransferAction {

    public const SCHEMA_TYPE = 'SendAction';

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/deliveryMethod
     */
    public string|array|null $deliveryMethod = null;

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
