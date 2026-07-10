<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BorrowAction.
 *
 * The act of obtaining an object under an agreement to return it at a later
 * date. Reciprocal of LendAction.
 *
 * Related actions:
 *
 * * [[LendAction]]: Reciprocal of BorrowAction.
 *
 * @see https://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction {

    public const SCHEMA_TYPE = 'BorrowAction';

    /**
     * A sub property of participant. The person that lends the object being
     * borrowed.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/lender
     */
    public Organization|Person|array|null $lender = null;
}
