<?php

namespace PayEye\Lib\Enum;

abstract class ShippingType
{
    public const INPOST = 'INPOST';
    public const DHL = 'DHL';
    public const COURIER = 'COURIER';
    public const SELF_PICKUP = 'SELF_PICKUP';

    public static function getAll(): array
    {
        return [
            self::INPOST,
            self::DHL,
            self::COURIER,
            self::SELF_PICKUP,
        ];
    }
}
