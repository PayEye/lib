<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Tool\Builder;

class OrderUpdateStatusRequestModel
{
    use Builder;

    /** @var string */
    public $orderId;

    /** @var string */
    public $paymentId;

    /** @var string */
    public $status;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setOrderId($context['orderId'])
            ->setPaymentId($context['paymentId'])
            ->setStatus($context['status']);
    }

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
}
