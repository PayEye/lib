<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class SignatureNotMatchedException extends PayEyePaymentException
{
    protected $message = 'Signature not matched';
    protected $statusCode = HttpStatus::UNAUTHORIZED;
    protected $errorCode = ErrorCode::SIGNATURE_NOT_MATCHED;
}
