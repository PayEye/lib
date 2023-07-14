<?php

declare(strict_types=1);

namespace PayEye\Lib\Order;

use PayEye\Lib\Enum\SignatureFrom;
use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class OrderUpdateStatusResponseModel implements SignedContent
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
     * @return OrderUpdateStatusResponseModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setStatus($context['status'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature']);
    }

    /**
     * @param string $status
     * @return OrderUpdateStatusResponseModel
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param array $signatureFrom
     * @return OrderUpdateStatusResponseModel
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
     * @return OrderUpdateStatusResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
