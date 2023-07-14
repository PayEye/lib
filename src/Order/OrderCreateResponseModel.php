<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Enum\SignatureFrom;
use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class OrderCreateResponseModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $checkoutUrl;

    /** @var string */
    public $orderId;

    /** @var int|float */
    public $totalAmount;

    /** @var int|float */
    public $cartAmount;

    /** @var int|float */
    public $shippingAmount;

    /** @var string */
    public $currency;

    /** @var string */
    public $signature;

    /** @var string[] */
    public $signatureFrom = ['checkoutUrl', 'orderId', 'totalAmount', 'cartAmount', 'shippingAmount', 'currency'];

    /**
     * @param array $context
     * @return OrderCreateResponseModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCheckoutUrl($context['checkoutUrl'])
            ->setOrderId($context['orderId'])
            ->setTotalAmount($context['totalAmount'])
            ->setCartAmount($context['cartAmount'])
            ->setShippingAmount($context['shippingAmount'])
            ->setCurrency($context['currency'])
            ->setSignature($context['signature'])
            ->setSignatureFrom($context['signatureFrom']);
    }

    /**
     * @param string $checkoutUrl
     * @return OrderCreateResponseModel
     */
    public function setCheckoutUrl(string $checkoutUrl): self
    {
        $this->checkoutUrl = $checkoutUrl;

        return $this;
    }

    /**
     * @param string $orderId
     * @return OrderCreateResponseModel
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param float|int $totalAmount
     * @return OrderCreateResponseModel
     */
    public function setTotalAmount($totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @param float|int $cartAmount
     * @return OrderCreateResponseModel
     */
    public function setCartAmount($cartAmount): self
    {
        $this->cartAmount = $cartAmount;

        return $this;
    }

    /**
     * @param float|int $shippingAmount
     * @return OrderCreateResponseModel
     */
    public function setShippingAmount($shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * @param string $currency
     * @return OrderCreateResponseModel
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param string[] $signatureFrom
     * @return OrderCreateResponseModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutUrl(): string
    {
        return $this->checkoutUrl;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return float|int
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @return float|int
     */
    public function getCartAmount()
    {
        return $this->cartAmount;
    }

    /**
     * @return float|int
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
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
     * @return OrderCreateResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
