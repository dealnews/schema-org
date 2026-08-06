<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * SoftwareSourceCode.
 *
 * Computer programming source code. Example: Full (compile ready) solutions,
 * code snippet samples, scripts, templates.
 *
 * @see https://schema.org/SoftwareSourceCode
 */
class SoftwareSourceCode extends CreativeWork {

    public const SCHEMA_TYPE = 'SoftwareSourceCode';

    /**
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, GitHub, CodePlex).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/codeRepository
     */
    public string|array|null $codeRepository = null;

    /**
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/codeSampleType
     */
    public string|array|null $codeSampleType = null;

    /**
     * The computer programming language.
     *
     * @var ComputerLanguage|string|ComputerLanguage[]|string[]|null
     *
     * @see https://schema.org/programmingLanguage
     */
    public ComputerLanguage|string|array|null $programmingLanguage = null;

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1,
     * Python 2.3, .NET Framework 3.0).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/runtimePlatform
     */
    public string|array|null $runtimePlatform = null;

    /**
     * Target Operating System / Product to which the code applies.  If applies to
     * several versions, just the product name can be used.
     *
     * @var SoftwareApplication|SoftwareApplication[]|null
     *
     * @see https://schema.org/targetProduct
     */
    public SoftwareApplication|array|null $targetProduct = null;
}
