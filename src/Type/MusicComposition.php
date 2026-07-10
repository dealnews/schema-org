<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MusicComposition.
 *
 * A musical composition.
 *
 * @see https://schema.org/MusicComposition
 */
class MusicComposition extends CreativeWork {

    public const SCHEMA_TYPE = 'MusicComposition';

    /**
     * The person or organization who wrote a composition, or who is the composer
     * of a work performed at some event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/composer
     */
    public Organization|Person|array|null $composer = null;

    /**
     * The date and place the work was first performed.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/firstPerformance
     */
    public Event|array|null $firstPerformance = null;

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     * @var MusicComposition|array|null
     *
     * @see https://schema.org/includedComposition
     */
    public MusicComposition|array|null $includedComposition = null;

    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @var string|array|null
     *
     * @see https://schema.org/iswcCode
     */
    public string|array|null $iswcCode = null;

    /**
     * The person who wrote the words.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/lyricist
     */
    public Person|array|null $lyricist = null;

    /**
     * The words in the song.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/lyrics
     */
    public CreativeWork|array|null $lyrics = null;

    /**
     * An arrangement derived from the composition.
     *
     * @var MusicComposition|array|null
     *
     * @see https://schema.org/musicArrangement
     */
    public MusicComposition|array|null $musicArrangement = null;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/musicCompositionForm
     */
    public string|array|null $musicCompositionForm = null;

    /**
     * The key, mode, or scale this composition uses.
     *
     * @var string|array|null
     *
     * @see https://schema.org/musicalKey
     */
    public string|array|null $musicalKey = null;

    /**
     * An audio recording of the work.
     *
     * @var MusicRecording|array|null
     *
     * @see https://schema.org/recordedAs
     */
    public MusicRecording|array|null $recordedAs = null;
}
