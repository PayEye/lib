<?php

declare(strict_types=1);

namespace PayEye\Lib\Enum;

abstract class OrderStatus
{
    public const SUCCESS = 'SUCCESS';
    public const REJECTED = 'REJECTED';

    public static function getAll(): array
    {
        return [
            self::REJECTED,
            self::SUCCESS,
        ];
    }
}
