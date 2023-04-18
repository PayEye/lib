<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class ReturnNotFoundException extends PayEyePaymentException
{
    protected $message = 'Return not found';
    protected $statusCode = HttpStatus::NOT_FOUND;
    protected $errorCode = ErrorCode::RETURN_NOT_FOUND;
}
