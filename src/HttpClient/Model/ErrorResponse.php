<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

class ErrorResponse
{
    /** @var string */
    private $errorMessage;

    /** @var string */
    private $errorCode;

    /** @var array */
    private $signatureFrom;

    public function __construct(string $errorCode, string $errorMessage, array $signatureFrom)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->signatureFrom = $signatureFrom;
    }

    public static function createFromArray(array $context): self
    {
        return new self(
            $context['errorCode'],
            $context['errorMessage'],
            $context['signatureFrom']
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }
}
