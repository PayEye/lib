<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Model\RefundProduct;
use PayEye\Lib\Tool\Builder;

class ReturnCreateRequestModel
{
    use Builder;

    /** @var string */
    public $orderId;

    /** @var int */
    public $amount;

    /** @var string */
    public $currency;

    /** @var RefundProduct[] */
    public $products;

    public static function createFromArray(array $context): self
    {
        $products = array_map(static function (array $product) {
            return RefundProduct::createFromArray($product);
        }, $context['products']);

        return self::builder()
            ->setOrderId($context['orderId'])
            ->setAmount($context['amount'])
            ->setCurrency($context['currency'])
            ->setProducts($products);
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param RefundProduct[] $products
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
