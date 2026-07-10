<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * LendAction.
 *
 * The act of providing an object under an agreement that it will be returned
 * at a later date. Reciprocal of BorrowAction.
 *
 * Related actions:
 *
 * * [[BorrowAction]]: Reciprocal of LendAction.
 *
 * @see https://schema.org/LendAction
 */
class LendAction extends TransferAction {

    public const SCHEMA_TYPE = 'LendAction';

    /**
     * A sub property of participant. The person that borrows the object being
     * lent.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/borrower
     */
    public Person|array|null $borrower = null;
}
