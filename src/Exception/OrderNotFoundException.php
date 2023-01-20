<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class OrderNotFoundException extends PayEyePaymentException
{
    protected $message = 'Order not found';
    protected $statusCode = HttpStatus::NOT_FOUND;
    protected $errorCode = ErrorCode::ORDER_NOT_FOUND;
}
