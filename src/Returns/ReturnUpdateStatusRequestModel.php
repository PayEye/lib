<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Enum\TransferStatus;
use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class ReturnUpdateStatusRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $returnId;

    /** @var string */
    public $paymentId;

    /**
     * @var string
     * @see TransferStatus
     */
    public $transferStatus;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['returnId', 'transferStatus'];

    /**
     * @param array $context
     * @return ReturnUpdateStatusRequestModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setReturnId($context['returnId'])
            ->setPaymentId($context['paymentId'])
            ->setTransferStatus($context['transferStatus']);
    }

    /**
     * @param string $returnId
     * @return ReturnUpdateStatusRequestModel
     */
    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    public function setPaymentId(string $paymentId): self
    {
        $this->paymentId = $paymentId;

        return $this;
    }

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

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return ReturnUpdateStatusRequestModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param string[] $signatureFrom
     * @return ReturnUpdateStatusRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
