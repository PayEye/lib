<?php

declare(strict_types=1);

namespace PayEye\Lib\Enum;

abstract class OrderStatus
{
    public const SUCCESS = 'SUCCESS';
    public const REJECTED = 'REJECTED';
    public const ORDER_CREATED = 'ORDER_CREATED';

    public static function getAll(): array
    {
        return [
            self::REJECTED,
            self::SUCCESS,
            self::ORDER_CREATED,
        ];
    }
}
