<?php

declare(strict_types=1);

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class PaymentMethodIsDisabledException extends PayEyePaymentException
{
    protected $message = 'Payment method is disabled';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::PAYEYE_PAYMENT_IS_DISABLED;
}
