<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class CouponAppliedException extends PayEyePaymentException
{
    protected $message = 'Coupon Applied';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::APPLIED_COUPON;
}
