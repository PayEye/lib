<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class CartNotFoundException extends PayEyePaymentException
{
    protected $message = 'Cart not found';
    protected $statusCode = HttpStatus::NOT_FOUND;
    protected $errorCode = ErrorCode::CART_NOT_FOUND;
}
