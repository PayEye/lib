<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Enum\SignatureFrom;
use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class ReturnUpdateStatusResponseModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $status = 'OK';

    /** @var string */
    public $signature;

    /** @var array */
    public $signatureFrom = ['status'];

    /**
     * @param array $context
     * @return ReturnUpdateStatusResponseModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setStatus($context['status']);
    }

    /**
     * @param string $status
     * @return ReturnUpdateStatusResponseModel
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param array $signatureFrom
     * @return ReturnUpdateStatusResponseModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
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
     * @return ReturnUpdateStatusResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
