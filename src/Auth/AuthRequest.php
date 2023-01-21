<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

class AuthRequest
{
    /** @var array */
    private $signatureFrom;

    /** @var string */
    private $signature;

    public function __construct(array $signatureFrom, string $signature)
    {
        $this->signatureFrom = $signatureFrom;
        $this->signature = $signature;
    }

    public static function createFromArray(array $context): self
    {
        return new self(
            $context['signatureFrom'] ?? [],
            $context['signature'] ?? ''
        );
    }

    public function toArray(): array
    {
        return [
            'signatureFrom' => $this->getSignatureFrom(),
            'signature' => $this->getSignature(),
        ];
    }

    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }
}
