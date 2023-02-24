<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Model\Invoice;
use PayEye\Lib\Model\PersonalData;
use PayEye\Lib\Order\Partials\Shipment;

defined('ABSPATH') || exit;

class OrderRequestModel
{
    /** @var string */
    private $cartId;

    /** @var string */
    private $shippingId;

    /** @var null|string */
    private $deliveryData;

    /** @var PersonalData */
    private $personalData;

    /** @var bool */
    private $hasInvoice;

    /** @var Shipment */
    private $shipment;

    /** @var null|Invoice */
    private $invoice;

    /** @var string */
    private $cartHash;

    /** @var string */
    private $shippingProvider;

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->shippingId = $request['shippingId'];
        $this->personalData = new PersonalData($request['personalData']);
        $this->shipment = new Shipment($request['shipment']);
        $this->hasInvoice = $request['hasInvoice'];
        $this->cartHash = $request['cartHash'];
        $this->shippingProvider = $request['shippingProvider'];

        $invoice = $request['invoice'];
        if ($this->hasInvoice) {
            $this->invoice = new Invoice($invoice);
        }
        $this->deliveryData = $request['deliveryData'];
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getShippingId(): string
    {
        return $this->shippingId;
    }

    public function getPersonalData(): PersonalData
    {
        return $this->personalData;
    }

    public function getShipment(): Shipment
    {
        return $this->shipment;
    }

    public function isHasInvoice(): bool
    {
        return $this->hasInvoice;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function getDeliveryData(): ?string
    {
        return $this->deliveryData;
    }

    public function getCartHash(): string
    {
        return $this->cartHash;
    }

    public function getShippingProvider(): string
    {
        return $this->shippingProvider;
    }
}
