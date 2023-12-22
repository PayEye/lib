<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

use PayEye\Lib\Interfaces\SignedContent;

class AuthRequest implements SignedContent
{
    /** @var array */
    private $signatureFrom;

    /** @var string */
    private $signature;

    /**
     * @param array $signatureFrom
     * @param string $signature
     * @return AuthRequest
     */
    public static function create(array $signatureFrom, string $signature): self
    {
        $object = new self();
        $object->signatureFrom = $signatureFrom;
        $object->signature = $signature;

        return $object;
    }

    /**
     * @param array $context
     * @return AuthRequest
     */
    public static function createFromArray(array $context): self
    {
        $object = new self();
        $object->signatureFrom = $context['signatureFrom'] ?? [];
        $object->signature = $context['signature'] ?? '';

        return $object;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'signatureFrom' => $this->getSignatureFrom(),
            'signature' => $this->getSignature(),
        ];
    }

    /**
     * @return array
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
     * @param array $signatureFrom
     * @return AuthRequest
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }

    /**
     * @param string $signature
     * @return AuthRequest
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
