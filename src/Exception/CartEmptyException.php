<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class CartEmptyException extends PayEyePaymentException
{
    protected $message = 'Cart is empty';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::CART_EMPTY;
}
