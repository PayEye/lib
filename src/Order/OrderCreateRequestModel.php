<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Model\Invoice;
use PayEye\Lib\Model\Billing;
use PayEye\Lib\Model\Shipping;
use PayEye\Lib\Tool\Builder;

class OrderCreateRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    private $cartId;

    /** @var null|string */
    private $shippingId;

    /** @var Billing */
    private $billing;

    /** @var Shipping */
    private $shipping;

    /** @var string */
    private $cartHash;

    /** @var null|string */
    private $shippingProvider;

    /** @var null|Invoice */
    private $invoice;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['cartId', 'shippingId', 'billing', 'shipping', 'cartHash', 'hasInvoice', 'shippingProvider', 'invoice'];

    /**
     * @param array $request
     * @return OrderCreateRequestModel
     */
    public static function createFromArray(array $request): self
    {
        $object = self::builder();

        $object->cartId = $request['cartId'];
        $object->shippingId = $request['shippingId'];
        $object->billing = Billing::createFromArray($request['billing']);
        $object->shipping = Shipping::createFromArray($request['shipping']);
        $object->hasInvoice = $request['hasInvoice'];
        $object->cartHash = $request['cartHash'];
        $object->shippingProvider = $request['shippingProvider'];

        if ($object->hasInvoice) {
            $object->invoice = Invoice::createFromArray($request['invoice']);
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
     * @return \PayEye\Lib\Model\Billing
     */
    public function getBilling(): Billing
    {
        return $this->billing;
    }

    /**
     * @return \PayEye\Lib\Model\Shipping
     */
    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    /**
     * @return bool
     */
    public function hasInvoice(): bool
    {
        return $this->hasInvoice;
    }

    /**
     * @return \PayEye\Lib\Model\Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @return string
     */
    public function getCartHash(): string
    {
        return $this->cartHash;
    }

    /**
     * @return string|null
     */
    public function getShippingProvider(): ?string
    {
        return $this->shippingProvider;
    }

    /**
     * @param string $cartId
     * @return OrderCreateRequestModel
     */
    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param string $shippingId
     * @return OrderCreateRequestModel
     */
    public function setShippingId(string $shippingId): self
    {
        $this->shippingId = $shippingId;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Billing $billing
     * @return OrderCreateRequestModel
     */
    public function setBilling(Billing $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @param bool $hasInvoice
     * @return OrderCreateRequestModel
     */
    public function setHasInvoice(bool $hasInvoice): self
    {
        $this->hasInvoice = $hasInvoice;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Shipping $shipping
     * @return OrderCreateRequestModel
     */
    public function setShipping(Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Invoice|null $invoice
     * @return OrderCreateRequestModel
     */
    public function setInvoice(?Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @param string $cartHash
     * @return OrderCreateRequestModel
     */
    public function setCartHash(string $cartHash): self
    {
        $this->cartHash = $cartHash;

        return $this;
    }

    /**
     * @param string $shippingProvider
     * @return OrderCreateRequestModel
     */
    public function setShippingProvider(string $shippingProvider): self
    {
        $this->shippingProvider = $shippingProvider;

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
     * @return OrderCreateRequestModel
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
     * @return OrderCreateRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
