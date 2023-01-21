<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class OrderFailedException extends PayEyePaymentException
{
    protected $message = 'Order has REJECTED status';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::ORDER_FAILED;
}
