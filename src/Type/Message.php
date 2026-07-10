<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Message.
 *
 * A single message from a sender to one or more organizations or people.
 *
 * @see https://schema.org/Message
 */
class Message extends CreativeWork {

    public const SCHEMA_TYPE = 'Message';

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     * @var ContactPoint|Organization|Person|array|null
     *
     * @see https://schema.org/bccRecipient
     */
    public ContactPoint|Organization|Person|array|null $bccRecipient = null;

    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     * @var ContactPoint|Organization|Person|array|null
     *
     * @see https://schema.org/ccRecipient
     */
    public ContactPoint|Organization|Person|array|null $ccRecipient = null;

    /**
     * The date/time at which the message has been read by the recipient if a
     * single recipient exists.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dateRead
     */
    public string|array|null $dateRead = null;

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dateReceived
     */
    public string|array|null $dateReceived = null;

    /**
     * The date/time at which the message was sent.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dateSent
     */
    public string|array|null $dateSent = null;

    /**
     * A CreativeWork attached to the message.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/messageAttachment
     */
    public CreativeWork|array|null $messageAttachment = null;

    /**
     * A sub property of participant. The participant who is at the receiving end
     * of the action.
     *
     * @var Audience|ContactPoint|Organization|Person|array|null
     *
     * @see https://schema.org/recipient
     */
    public Audience|ContactPoint|Organization|Person|array|null $recipient = null;

    /**
     * A sub property of participant. The participant who is at the sending end of
     * the action.
     *
     * @var Audience|Organization|Person|array|null
     *
     * @see https://schema.org/sender
     */
    public Audience|Organization|Person|array|null $sender = null;

    /**
     * A sub property of recipient. The recipient who was directly sent the
     * message.
     *
     * @var Audience|ContactPoint|Organization|Person|array|null
     *
     * @see https://schema.org/toRecipient
     */
    public Audience|ContactPoint|Organization|Person|array|null $toRecipient = null;
}
