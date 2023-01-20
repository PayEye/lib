<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class CartContentNotMatchedException extends PayEyePaymentException
{
    protected $message = 'Cart content not matched';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::CART_CONTENT_NOT_MATCHED;
}
