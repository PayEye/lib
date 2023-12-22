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
     * @see \PayEye\Lib\Enum\ReturnStatus
     */
    public $status;

    /** @var int */
    public $amount;

    /**
     * @param string $shopIdentifier
     * @return ReturnStatusRequest
     */
    public function setShopIdentifier(string $shopIdentifier): self
    {
        $this->shopIdentifier = $shopIdentifier;

        return $this;
    }

    /**
     * @param string $refundId
     * @return ReturnStatusRequest
     */
    public function setReturnId(string $refundId): self
    {
        $this->returnId = $refundId;

        return $this;
    }

    /**
     * @param string $status
     * @return ReturnStatusRequest
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param int $amount
     * @return ReturnStatusRequest
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShopIdentifier(): string
    {
        return $this->shopIdentifier;
    }

    /**
     * @return string
     */
    public function getReturnId(): string
    {
        return $this->returnId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
