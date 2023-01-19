<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Cart
{
    use Builder;

    /** @var int */
    public $total;

    /** @var int */
    public $regularTotal;

    /** @var int */
    public $products;

    /** @var int */
    public $regularProducts;

    /** @var int */
    public $discount;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setTotal($context['total'])
            ->setRegularTotal($context['regularTotal'])
            ->setProducts($context['products'])
            ->setRegularProducts($context['regularProducts'])
            ->setDiscount($context['discount']);
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;
        return $this;
    }


    public function setRegularTotal(int $regularTotal): self
    {
        $this->regularTotal = $regularTotal;
        return $this;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    public function setProducts(int $products): self
    {
        $this->products = $products;
        return $this;
    }

    public function setRegularProducts(int $regularProducts): self
    {
        $this->regularProducts = $regularProducts;
        return $this;
    }
}
