<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Course.
 *
 * A description of an educational course which may be offered as distinct
 * instances which take place at different times or take place at different
 * locations, or be offered through different media or modes of study. An
 * educational course is a sequence of one or more educational events and/or
 * creative works which aims to build knowledge, competence or ability of
 * learners.
 *
 * @see https://schema.org/Course
 */
class Course extends CreativeWork {

    public const SCHEMA_TYPE = 'Course';

    /**
     * A language someone may use with or at the item, service or place. Please use
     * one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @var Language|string|array|null
     *
     * @see https://schema.org/availableLanguage
     */
    public Language|string|array|null $availableLanguage = null;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g.
     * CS101 or 6.001).
     *
     * @var string|array|null
     *
     * @see https://schema.org/courseCode
     */
    public string|array|null $courseCode = null;

    /**
     * Requirements for taking the Course. May be completion of another [[Course]]
     * or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     *
     * @var AlignmentObject|Course|string|array|null
     *
     * @see https://schema.org/coursePrerequisites
     */
    public AlignmentObject|Course|string|array|null $coursePrerequisites = null;

    /**
     * A description of the qualification, award, certificate, diploma or other
     * educational credential awarded as a consequence of successful completion of
     * this course or program.
     *
     * @var string|array|null
     *
     * @see https://schema.org/educationalCredentialAwarded
     */
    public string|array|null $educationalCredentialAwarded = null;

    /**
     * An offering of the course at a specific time and place or through specific
     * media or mode of study or to a specific section of students.
     *
     * @var CourseInstance|array|null
     *
     * @see https://schema.org/hasCourseInstance
     */
    public CourseInstance|array|null $hasCourseInstance = null;
}
