<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;


use PayEye\Lib\Tool\Builder;

class Coupon
{
    use Builder;

    /** @var string */
    public $code;

    /** @var int */
    public $price;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCode($context['code'])
            ->setPrice($context['price']);
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;
        return $this;
    }
}
