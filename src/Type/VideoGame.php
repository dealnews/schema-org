<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * VideoGame.
 *
 * A video game is an electronic game that involves human interaction with a
 * user interface to generate visual feedback on a video device.
 *
 * @see https://schema.org/VideoGame
 */
class VideoGame extends Game {

    public const SCHEMA_TYPE = 'VideoGame';

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games
     * etc., or in an event. Actors can be associated with individual items or with
     * a series, episode, clip.
     *
     * @var PerformingGroup|Person|array|null
     *
     * @see https://schema.org/actor
     */
    public PerformingGroup|Person|array|null $actor = null;

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationCategory
     */
    public string|array|null $applicationCategory = null;

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationSubCategory
     */
    public string|array|null $applicationSubCategory = null;

    /**
     * The name of the application suite to which the application belongs (e.g.
     * Excel belongs to Office).
     *
     * @var string|array|null
     *
     * @see https://schema.org/applicationSuite
     */
    public string|array|null $applicationSuite = null;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @var string|array|null
     *
     * @see https://schema.org/availableOnDevice
     */
    public string|array|null $availableOnDevice = null;

    /**
     * Cheat codes to the game.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/cheatCode
     */
    public CreativeWork|array|null $cheatCode = null;

    /**
     * Countries for which the application is not supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string|array|null
     *
     * @see https://schema.org/countriesNotSupported
     */
    public string|array|null $countriesNotSupported = null;

    /**
     * Countries for which the application is supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string|array|null
     *
     * @see https://schema.org/countriesSupported
     */
    public string|array|null $countriesSupported = null;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/director
     */
    public Person|array|null $director = null;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @var string|array|null
     *
     * @see https://schema.org/downloadUrl
     */
    public string|array|null $downloadUrl = null;

    /**
     * Features or modules provided by this application (and possibly required by
     * other applications).
     *
     * @var string|array|null
     *
     * @see https://schema.org/featureList
     */
    public string|array|null $featureList = null;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB,
     * KB etc.), KB will be assumed.
     *
     * @var string|array|null
     *
     * @see https://schema.org/fileSize
     */
    public string|array|null $fileSize = null;

    /**
     * The edition of a video game.
     *
     * @var string|array|null
     *
     * @see https://schema.org/gameEdition
     */
    public string|array|null $gameEdition = null;

    /**
     * The electronic systems used to play <a
     * href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video
     * games</a>.
     *
     * @var string|Thing|array|null
     *
     * @see https://schema.org/gamePlatform
     */
    public string|Thing|array|null $gamePlatform = null;

    /**
     * The server on which  it is possible to play the game.
     *
     * @var GameServer|array|null
     *
     * @see https://schema.org/gameServer
     */
    public GameServer|array|null $gameServer = null;

    /**
     * Links to tips, tactics, etc.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/gameTip
     */
    public CreativeWork|array|null $gameTip = null;

    /**
     * URL at which the app may be installed, if different from the URL of the
     * item.
     *
     * @var string|array|null
     *
     * @see https://schema.org/installUrl
     */
    public string|array|null $installUrl = null;

    /**
     * Minimum memory requirements.
     *
     * @var string|array|null
     *
     * @see https://schema.org/memoryRequirements
     */
    public string|array|null $memoryRequirements = null;

    /**
     * The composer of the soundtrack.
     *
     * @var MusicGroup|Person|array|null
     *
     * @see https://schema.org/musicBy
     */
    public MusicGroup|Person|array|null $musicBy = null;

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     *
     * @var string|array|null
     *
     * @see https://schema.org/operatingSystem
     */
    public string|array|null $operatingSystem = null;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require
     * full internet access or may run only on wifi).
     *
     * @var string|array|null
     *
     * @see https://schema.org/permissions
     */
    public string|array|null $permissions = null;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The
     * game can be marked as multi-player, co-op and single-player at the same
     * time.
     *
     * @var string|array|null
     *
     * @see https://schema.org/playMode
     */
    public string|array|null $playMode = null;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @var string|array|null
     *
     * @see https://schema.org/processorRequirements
     */
    public string|array|null $processorRequirements = null;

    /**
     * Description of what changed in this version.
     *
     * @var string|array|null
     *
     * @see https://schema.org/releaseNotes
     */
    public string|array|null $releaseNotes = null;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1,
     * Python 2.3, .NET Framework 3.0).
     *
     * @var string|array|null
     *
     * @see https://schema.org/runtimePlatform
     */
    public string|array|null $runtimePlatform = null;

    /**
     * A link to a screenshot image of the app.
     *
     * @var ImageObject|string|array|null
     *
     * @see https://schema.org/screenshot
     */
    public ImageObject|string|array|null $screenshot = null;

    /**
     * Additional content for a software application.
     *
     * @var SoftwareApplication|array|null
     *
     * @see https://schema.org/softwareAddOn
     */
    public SoftwareApplication|array|null $softwareAddOn = null;

    /**
     * Software application help.
     *
     * @var CreativeWork|array|null
     *
     * @see https://schema.org/softwareHelp
     */
    public CreativeWork|array|null $softwareHelp = null;

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (examples:
     * DirectX, Java or .NET runtime).
     *
     * @var SoftwareApplication|string|array|null
     *
     * @see https://schema.org/softwareRequirements
     */
    public SoftwareApplication|string|array|null $softwareRequirements = null;

    /**
     * Version of the software instance.
     *
     * @var string|array|null
     *
     * @see https://schema.org/softwareVersion
     */
    public string|array|null $softwareVersion = null;

    /**
     * Storage requirements (free space required).
     *
     * @var string|array|null
     *
     * @see https://schema.org/storageRequirements
     */
    public string|array|null $storageRequirements = null;

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @var DataFeed|array|null
     *
     * @see https://schema.org/supportingData
     */
    public DataFeed|array|null $supportingData = null;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @var VideoObject|array|null
     *
     * @see https://schema.org/trailer
     */
    public VideoObject|array|null $trailer = null;
}
