<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

use PayEye\Lib\Tool\Builder;

class ReturnStatusResponse
{
    use Builder;

    /** @var string */
    public $returnId;

    /**
     * @var string
     * @see \PayEye\Lib\Enum\TransferStatus
     */
    public $transferStatus;

    /**
     * @param array $context
     * @return ReturnStatusResponse
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setReturnId($context['returnId'])
            ->setTransferStatus($context['transferStatus']);
    }

    /**
     * @param string $returnId
     * @return ReturnStatusResponse
     */
    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * @param string $transferStatus
     * @return ReturnStatusResponse
     */
    public function setTransferStatus(string $transferStatus): self
    {
        $this->transferStatus = $transferStatus;

        return $this;
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
    public function getTransferStatus(): string
    {
        return $this->transferStatus;
    }
}
