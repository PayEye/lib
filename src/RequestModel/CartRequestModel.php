<?php

declare(strict_types=1);

namespace PayEye\Lib\RequestModel;

use PayEye\Lib\Model\Shipment;

class CartRequestModel
{
    /** @var string */
    private $cartId;

    /** @var null|array */
    private $coupons;

    /** @var null|string */
    private $deliveryType;

    /** @var null|string */
    private $shippingId;

    /** @var null|Shipment */
    private $shipment;

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->coupons = $request['coupons'] ?? null;
        $this->shippingId = $request['shippingId'] ?? null;
        $this->deliveryType = $request['deliveryType'] ?? null;

        $shipment = $request['shipment'] ?? null;
        if ($shipment) {
            $this->shipment = Shipment::createFromArray($shipment);
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

    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }
}
