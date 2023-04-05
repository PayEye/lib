<?php

declare(strict_types=1);

namespace PayEye\Lib\Enum;

abstract class RefundStatus
{
    public const CREATED = 'CREATED';
    public const ACCEPTED = 'ACCEPTED';
    public const REJECTED = 'REJECTED';

    public static function getAll(): array
    {
        return [
            self::CREATED,
            self::ACCEPTED,
            self::REJECTED,
        ];
    }
}
