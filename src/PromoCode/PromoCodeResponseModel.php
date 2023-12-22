<?php

declare(strict_types=1);

namespace PayEye\Lib\PromoCode;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class PromoCodeResponseModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $status = 'OK';

    /** @var string */
    public $signature;

    /** @var string[] */
    public $signatureFrom = ['status'];

    /**
     * @param array $context
     * @return PromoCodeResponseModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setStatus($context['status'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature']);
    }

    /**
     * @param array $signatureFrom
     * @return PromoCodeResponseModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }

    /**
     * @param string $status
     * @return PromoCodeResponseModel
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

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
     * @return PromoCodeResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
