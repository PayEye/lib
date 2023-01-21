<?php

declare(strict_types=1);

namespace PayEye\Lib\ResponseModel;

use PayEye\Lib\Tool\Builder;

class OrderResponseModel
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

    /** @var string[] */
    public $signatureFrom;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCheckoutUrl($context['checkoutUrl'])
            ->setOrderId($context['orderId'])
            ->setTotalAmount($context['totalAmount'])
            ->setCartAmount($context['cartAmount'])
            ->setShippingAmount($context['shippingAmount'])
            ->setCurrency($context['currency'])
            ->setSignatureFrom($context['signatureFrom']);
    }

    public function setCheckoutUrl(string $checkoutUrl): self
    {
        $this->checkoutUrl = $checkoutUrl;
        return $this;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param float|int $totalAmount
     */
    public function setTotalAmount($totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @param float|int $cartAmount
     */
    public function setCartAmount($cartAmount): self
    {
        $this->cartAmount = $cartAmount;
        return $this;
    }

    /**
     * @param float|int $shippingAmount
     */
    public function setShippingAmount($shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string[] $signatureFrom
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;
        return $this;
    }
}
