<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

class OrderUpdateStatusResponseModel
{
    /** @var string */
    private $status;

    public function __construct(array $request)
    {
        $this->status = $request['status'];
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
