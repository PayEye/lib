<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class InvalidPostCodeException extends PayEyePaymentException
{
    protected $message = 'Invalid post code';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::INVALID_POST_CODE;
}
