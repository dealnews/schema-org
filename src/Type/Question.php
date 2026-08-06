<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Question.
 *
 * A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
 *
 * @see https://schema.org/Question
 */
class Question extends Comment {

    public const SCHEMA_TYPE = 'Question';

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     *
     * @var Answer|ItemList|Answer[]|ItemList[]|null
     *
     * @see https://schema.org/acceptedAnswer
     */
    public Answer|ItemList|array|null $acceptedAnswer = null;

    /**
     * The number of answers this question has received.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/answerCount
     */
    public int|array|null $answerCount = null;

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g.
     * on a Question/Answer site.
     *
     * @var Answer|ItemList|Answer[]|ItemList[]|null
     *
     * @see https://schema.org/suggestedAnswer
     */
    public Answer|ItemList|array|null $suggestedAnswer = null;
}
