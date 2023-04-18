<?php

declare(strict_types=1);

namespace PayEye\Lib\Service;

class AmountService
{
    /**
     * @param float|int $price
     * @return int
     */
    public function convertFloatToInteger($price): int
    {
        return (int)round(($price * 100), 0);
    }

    /**
     * @param float|int $price
     * @return float
     */
    public function convertIntegerToFloat($price): float
    {
        return (int)round(($price / 100), 0);
    }
}
