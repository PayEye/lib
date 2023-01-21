<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class InvalidCouponException extends PayEyePaymentException
{
    protected $message = 'Invalid coupon';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::INVALID_COUPON;
}
