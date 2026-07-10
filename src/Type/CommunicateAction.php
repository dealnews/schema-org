<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CommunicateAction.
 *
 * The act of conveying information to another person via a communication
 * medium (instrument) such as speech, email, or telephone conversation.
 *
 * @see https://schema.org/CommunicateAction
 */
class CommunicateAction extends InteractAction {

    public const SCHEMA_TYPE = 'CommunicateAction';

    /**
     * The subject matter of an object.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/about
     */
    public Thing|array|null $about = null;

    /**
     * The language of the content or performance or used in an action. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @var Language|string|array|null
     *
     * @see https://schema.org/inLanguage
     */
    public Language|string|array|null $inLanguage = null;

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
