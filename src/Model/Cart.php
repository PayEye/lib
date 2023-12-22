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

    /**
     * @param array $context
     * @return Cart
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setTotal($context['total'])
            ->setRegularTotal($context['regularTotal'])
            ->setProducts($context['products'])
            ->setRegularProducts($context['regularProducts'])
            ->setDiscount($context['discount']);
    }

    /**
     * @param int $total
     * @return Cart
     */
    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }


    /**
     * @param int $regularTotal
     * @return Cart
     */
    public function setRegularTotal(int $regularTotal): self
    {
        $this->regularTotal = $regularTotal;

        return $this;
    }

    /**
     * @param int $discount
     * @return Cart
     */
    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @param int $products
     * @return Cart
     */
    public function setProducts(int $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @param int $regularProducts
     * @return Cart
     */
    public function setRegularProducts(int $regularProducts): self
    {
        $this->regularProducts = $regularProducts;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getRegularTotal(): int
    {
        return $this->regularTotal;
    }

    /**
     * @return int
     */
    public function getProducts(): int
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function getRegularProducts(): int
    {
        return $this->regularProducts;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }
}
