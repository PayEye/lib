<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

use PayEye\Lib\Tool\Builder;

class ReturnStatusRequest
{
    use Builder;

    /** @var string */
    public $shopIdentifier;

    /** @var string */
    public $returnId;

    /**
     * @var string
     * @see ReturnStatus
     */
    public $status;

    public function setShopIdentifier(string $shopIdentifier): self
    {
        $this->shopIdentifier = $shopIdentifier;

        return $this;
    }

    public function setReturnId(string $refundId): self
    {
        $this->returnId = $refundId;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
