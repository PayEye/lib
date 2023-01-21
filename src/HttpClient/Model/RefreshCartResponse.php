<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

class RefreshCartResponse
{
    /** @var string */
    private $status;

    /** @var array */
    private $signatureFrom;

    /** @var string */
    private $signature;

    public function __construct(string $status, array $signatureFrom, string $signature)
    {
        $this->status = $status;
        $this->signatureFrom = $signatureFrom;
        $this->signature = $signature;
    }

    public static function createFromArray(array $context): self
    {
        return new self(
            $context['status'],
            $context['signatureFrom'],
            $context['signature']
        );
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }
}
