<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ReceiveAction.
 *
 * The act of physically/electronically taking delivery of an object that has
 * been transferred from an origin to a destination. Reciprocal of SendAction.
 *
 * Related actions:
 *
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transferred (e.g. I can receive a package, but it does
 * not mean the package is now mine).
 *
 * @see https://schema.org/ReceiveAction
 */
class ReceiveAction extends TransferAction {

    public const SCHEMA_TYPE = 'ReceiveAction';

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/deliveryMethod
     */
    public string|array|null $deliveryMethod = null;

    /**
     * A sub property of participant. The participant who is at the sending end of
     * the action.
     *
     * @var Audience|Organization|Person|Audience[]|Organization[]|Person[]|null
     *
     * @see https://schema.org/sender
     */
    public Audience|Organization|Person|array|null $sender = null;
}
