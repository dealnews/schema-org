<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * CourseInstance.
 *
 * An instance of a [[Course]] which is distinct from other instances because
 * it is offered at a different time or location or through different media or
 * modes of study or to a specific section of students.
 *
 * @see https://schema.org/CourseInstance
 */
class CourseInstance extends Event {

    public const SCHEMA_TYPE = 'CourseInstance';

    /**
     * The medium or means of delivery of the course instance or the mode of study,
     * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous"
     * or "asynchronous"; "full-time" or "part-time") or as a URL reference to a
     * term from a controlled vocabulary (e.g.
     * https://ceds.ed.gov/element/001311#Asynchronous).
     *
     * @var string|array|null
     *
     * @see https://schema.org/courseMode
     */
    public string|array|null $courseMode = null;

    /**
     * A person assigned to instruct or provide instructional assistance for the
     * [[CourseInstance]].
     *
     * @var Person|array|null
     *
     * @see https://schema.org/instructor
     */
    public Person|array|null $instructor = null;
}
