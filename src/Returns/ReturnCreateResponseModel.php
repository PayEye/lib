<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Enum\SignatureFrom;
use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class ReturnCreateResponseModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $returnId;

    /**
     * @var string
     * @see ReturnStatus
     */
    public $status;

    /** @var string */
    public $signature;

    /** @var string[] */
    public $signatureFrom = ['returnId', 'status'];

    /**
     * @param array $context
     * @return ReturnCreateResponseModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setReturnId($context['returnId'])
            ->setStatus($context['status']);
    }

    /**
     * @param string $returnId
     * @return ReturnCreateResponseModel
     */
    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * @param string $status
     * @return ReturnCreateResponseModel
     */
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
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
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
     * @return ReturnCreateResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
