<?php

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

class ShippingProviderNotMatchedException extends PayEyePaymentException
{
    protected $message = 'Shipping provider is not matched with shippingId';
    protected $statusCode = HttpStatus::BAD_REQUEST;
    protected $errorCode = ErrorCode::SHIPPING_PROVIDER_NOT_MATCHED;
}
