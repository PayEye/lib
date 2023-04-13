<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Tool\Builder;

class ReturnResponseModel
{
    use Builder;

    /** @var string */
    public $returnId;

    /**
     * @var string
     * @see ReturnStatus
     */
    public $status;

    /** @var string[] */
    public $signatureFrom;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setReturnId($context['refundId'])
            ->setStatus($context['status']);
    }

    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string[] $signatureFrom
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
