<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

class OrderUpdateStatusRequestModel
{
    /** @var string */
    private $orderId;

    /** @var string */
    private $status;

    public function __construct(array $request)
    {
        $this->orderId = $request['orderId'];
        $this->status = $request['status'];
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
