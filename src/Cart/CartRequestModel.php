<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Model\Shipping;

class CartRequestModel
{
    /** @var string */
    private $cartId;

    /** @var null|string */
    private $deliveryType;

    /** @var null|string */
    private $shippingId;

    /** @var null|Shipping */
    private $shipping;

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->shippingId = $request['shippingId'] ?? null;
        $this->deliveryType = $request['deliveryType'] ?? null;

        $shipping = $request['shipping'] ?? null;
        if ($shipping) {
            $this->shipping = new Shipping($shipping);
        }
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }
}
