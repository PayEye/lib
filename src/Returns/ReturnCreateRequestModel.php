<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Model\RefundProduct;
use PayEye\Lib\Tool\Builder;

class ReturnCreateRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $orderId;

    /** @var string */
    public $currency;

    /** @var RefundProduct[] */
    public $products;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['orderId', 'currency', 'products'];

    /**
     * @param array $context
     * @return ReturnCreateRequestModel
     */
    public static function createFromArray(array $context): self
    {
        $products = array_map(static function (array $product) {
            return RefundProduct::createFromArray($product);
        }, $context['products']);

        return self::builder()
            ->setOrderId($context['orderId'])
            ->setCurrency($context['currency'])
            ->setProducts($products);
    }

    /**
     * @param string $orderId
     * @return ReturnCreateRequestModel
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param RefundProduct[] $products
     * @return ReturnCreateRequestModel
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @param string $currency
     * @return ReturnCreateRequestModel
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return ReturnCreateRequestModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param string[] $signatureFrom
     * @return ReturnCreateRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
