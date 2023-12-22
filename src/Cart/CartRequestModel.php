<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Model\Billing;
use PayEye\Lib\Model\Shipping;
use PayEye\Lib\Tool\Builder;

class CartRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    private $cartId;

    /** @var null|string */
    private $shippingId;

    /** @var null|Billing */
    private $billing;

    /** @var null|Shipping */
    private $shipping;

    /** @var null|string */
    private $shippingProvider;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['cartId'];

    /**
     * @param array $request
     * @return CartRequestModel
     */
    public static function createFromArray(array $request): self
    {
        $object = self::builder();

        $object->cartId = $request['cartId'];
        $object->shippingId = $request['shippingId'] ?? null;

        $billing = $request['billing'] ?? null;
        if ($billing) {
            $object->billing = Billing::createFromArray($billing);
        }

        $object->shippingProvider = $request['shippingProvider'] ?? null;

        $shipping = $request['shipping'] ?? null;
        if ($shipping) {
            $object->shipping = Shipping::createFromArray($shipping);
        }

        $object->signature = $request['signature'];
        $object->signatureFrom = $request['signatureFrom'];

        return $object;
    }

    /**
     * @return string
     */
    public function getCartId(): string
    {
        return $this->cartId;
    }

    /**
     * @return string|null
     */
    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    /**
     * @return \PayEye\Lib\Model\Billing|null
     */
    public function getBilling(): ?Billing
    {
        return $this->billing;
    }

    /**
     * @return string|null
     */
    public function getShippingProvider(): ?string
    {
        return $this->shippingProvider;
    }

    /**
     * @return \PayEye\Lib\Model\Shipping|null
     */
    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $cartId
     * @return CartRequestModel
     */
    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param string|null $shippingId
     * @return CartRequestModel
     */
    public function setShippingId(?string $shippingId): self
    {
        $this->shippingId = $shippingId;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Billing|null $billing
     * @return CartRequestModel
     */
    public function setBilling(?Billing $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Shipping|null $shipping
     * @return CartRequestModel
     */
    public function setShipping(?Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @param string|null $shippingProvider
     * @return CartRequestModel
     */
    public function setShippingProvider(?string $shippingProvider): self
    {
        $this->shippingProvider = $shippingProvider;

        return $this;
    }

    /**
     * @param string $signature
     * @return CartRequestModel
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
     * @param array $signatureFrom
     * @return CartRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
