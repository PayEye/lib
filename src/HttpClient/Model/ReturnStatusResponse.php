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
     * @see TransferStatus
     */
    public $transferStatus;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setReturnId($context['returnId'])
            ->setTransferStatus($context['transferStatus']);
    }

    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    public function setTransferStatus(string $transferStatus): self
    {
        $this->transferStatus = $transferStatus;

        return $this;
    }


}
