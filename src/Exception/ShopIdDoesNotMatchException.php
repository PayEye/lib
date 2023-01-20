<?php

declare(strict_types=1);

namespace PayEye\Lib\Exception;

use PayEye\Lib\Enum\ErrorCode;
use PayEye\Lib\Enum\HttpStatus;

defined('ABSPATH') || exit;

class ShopIdDoesNotMatchException extends PayEyePaymentException
{
    protected $message = 'ShopId does not match';
    protected $statusCode = HttpStatus::UNAUTHORIZED;
    protected $errorCode = ErrorCode::SHOP_ID_NOT_MATCHED;
}
