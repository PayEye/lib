<?php

declare(strict_types=1);

namespace PayEye\Lib\Refund;

use PayEye\Lib\Model\RefundProduct;
use PayEye\Lib\Tool\Builder;

class RefundRequestModel
{
    use Builder;

    /** @var string */
    public $orderId;

    /** @var RefundProduct[] */
    public $products;

    public static function createFromArray(array $context): self
    {
        $products = array_map(static function (array $product) {
            return RefundProduct::createFromArray($product);
        }, $context['products']);

        return self::builder()
            ->setOrderId($context['orderId'])
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
}
