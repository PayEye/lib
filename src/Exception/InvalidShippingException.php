<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class InvalidShippingException extends PayEyePaymentException
{
    protected $message = 'Invalid shipping';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::INVALID_SHIPPING;
}
