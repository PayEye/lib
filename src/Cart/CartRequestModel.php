<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Model\Billing;
use PayEye\Lib\Model\Shipping;

class CartRequestModel
{
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

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->shippingId = $request['shippingId'] ?? null;

        $billing = $request['billing'] ?? null;
        if ($billing) {
            $this->billing = new Billing($billing);
        }

        $this->shippingProvider = $request['shippingProvider'] ?? null;

        $shipping = $request['shipping'] ?? null;
        if ($shipping) {
            $this->shipping = new Shipping($shipping);
        }
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    public function getBilling(): ?Billing
    {
        return $this->billing;
    }

    public function getShippingProvider(): ?string
    {
        return $this->shippingProvider;
    }

    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }
}
