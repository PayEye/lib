<?php

declare(strict_types=1);

namespace PayEye\Lib\Refund;

use PayEye\Lib\Tool\Builder;

class RefundResponseModel
{
    use Builder;

    /** @var string */
    public $refundId;

    /**
     * @var string
     * @see RefundStatus
     */
    public $status;

    /** @var string[] */
    public $signatureFrom;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setRefundId($context['refundId'])
            ->setStatus($context['status']);
    }

    public function setRefundId(string $refundId): self
    {
        $this->refundId = $refundId;

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
