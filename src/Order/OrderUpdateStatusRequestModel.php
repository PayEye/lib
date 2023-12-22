<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class OrderUpdateStatusRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $orderId;

    /** @var string */
    public $paymentId;

    /** @var string */
    public $status;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['orderId', 'status'];

    /**
     * @param array $context
     * @return OrderUpdateStatusRequestModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setOrderId($context['orderId'])
            ->setPaymentId($context['paymentId'])
            ->setStatus($context['status']);
    }

    /**
     * @param string $orderId
     * @return OrderUpdateStatusRequestModel
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function setPaymentId(string $paymentId): self
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param string $signature
     * @return OrderUpdateStatusRequestModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

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
     * @param string[] $signatureFrom
     * @return OrderUpdateStatusRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
