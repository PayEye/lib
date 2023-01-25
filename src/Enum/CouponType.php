<?php

declare(strict_types=1);

namespace PayEye\Lib\Enum;

abstract class CouponType
{
    public const CONSTANT_DISCOUNT_VALUE = 'CONSTANT_DISCOUNT_VALUE';
    public const PERCENTAGE_DISCOUNT_VALUE = 'PERCENTAGE_DISCOUNT_VALUE';

    public static function getAll(): array
    {
        return [
            self::CONSTANT_DISCOUNT_VALUE,
            self::PERCENTAGE_DISCOUNT_VALUE
        ];
    }
}
