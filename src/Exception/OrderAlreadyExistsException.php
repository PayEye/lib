<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class OrderAlreadyExistsException extends PayEyePaymentException
{
    protected $message = 'Order with cardId is already exists';
    protected $statusCode = HttpStatus::NOT_FOUND;
    protected $errorCode = ErrorCode::ORDER_ALREADY_EXISTS;
}
