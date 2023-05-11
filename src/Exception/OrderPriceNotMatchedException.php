<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\HttpStatus;

class OrderPriceNotMatchedException extends PayEyePaymentException
{
    protected $message = 'Order price not matched';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = 'ORDER_PRICE_NOT_MATCHED';
}
