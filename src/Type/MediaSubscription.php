<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MediaSubscription.
 *
 * A subscription which allows a user to access media including audio, video,
 * books, etc.
 *
 * @see https://schema.org/MediaSubscription
 */
class MediaSubscription extends Intangible {

    public const SCHEMA_TYPE = 'MediaSubscription';

    /**
     * The Organization responsible for authenticating the user's subscription. For
     * example, many media apps require a cable/satellite provider to authenticate
     * your subscription before playing media.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/authenticator
     */
    public Organization|array|null $authenticator = null;

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer|array|null
     *
     * @see https://schema.org/expectsAcceptanceOf
     */
    public Offer|array|null $expectsAcceptanceOf = null;
}
