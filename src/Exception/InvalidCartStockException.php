<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class InvalidCartStockException extends PayEyePaymentException
{
    protected $message = 'Product is not in stock';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::INVALID_PRODUCT_STOCK;
}
