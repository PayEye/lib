<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Model\Invoice;
use PayEye\Lib\Model\Billing;
use PayEye\Lib\Model\Shipping;

class OrderCreateRequestModel
{
    /** @var string */
    private $cartId;

    /** @var string */
    private $shippingId;

    /** @var Billing */
    private $billing;

    /** @var bool */
    private $hasInvoice;

    /** @var Shipping */
    private $shipping;

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
        $this->billing = new Billing($request['billing']);
        $this->shipping = new Shipping($request['shipping']);
        $this->hasInvoice = $request['hasInvoice'];
        $this->cartHash = $request['cartHash'];
        $this->shippingProvider = $request['shippingProvider'];

        $invoice = $request['hasInvoice'];
        if ($this->hasInvoice) {
            $this->invoice = new Invoice($invoice);
        }
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getShippingId(): string
    {
        return $this->shippingId;
    }

    public function getBilling(): Billing
    {
        return $this->billing;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function isHasInvoice(): bool
    {
        return $this->hasInvoice;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
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
