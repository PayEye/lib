<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class WoocommerceException extends PayEyePaymentException
{
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::WOOCOMMERCE;
}
