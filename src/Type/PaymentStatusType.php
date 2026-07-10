<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PaymentStatusType.
 *
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 * @see https://schema.org/PaymentStatusType
 */
class PaymentStatusType extends StatusEnumeration {

    public const SCHEMA_TYPE = 'PaymentStatusType';

    public const PAYMENT_AUTOMATICALLY_APPLIED = 'https://schema.org/PaymentAutomaticallyApplied';
    public const PAYMENT_COMPLETE = 'https://schema.org/PaymentComplete';
    public const PAYMENT_DECLINED = 'https://schema.org/PaymentDeclined';
    public const PAYMENT_DUE = 'https://schema.org/PaymentDue';
    public const PAYMENT_PAST_DUE = 'https://schema.org/PaymentPastDue';
}
