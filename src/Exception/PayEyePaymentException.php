<?php

namespace PayEye\Lib\Exception;

use Exception;

class PayEyePaymentException extends Exception
{
    /** @var $statusCode int */
    protected $statusCode;

    /** @var $errorCode string */
    protected $errorCode;

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}
