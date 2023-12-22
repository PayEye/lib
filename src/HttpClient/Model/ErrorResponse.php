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

    /**
     * @param string $errorCode
     * @param string $errorMessage
     * @param array $signatureFrom
     * @return ErrorResponse
     */
    public static function create(string $errorCode, string $errorMessage, array $signatureFrom): self
    {
        $object = new self();

        $object->errorCode = $errorCode;
        $object->errorMessage = $errorMessage;
        $object->signatureFrom = $signatureFrom;

        return $object;
    }

    /**
     * @param array $context
     * @return ErrorResponse
     */
    public static function createFromArray(array $context): self
    {
        return self::create(
            $context['errorCode'],
            $context['errorMessage'],
            $context['signatureFrom']
        );
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @return array
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param string $errorMessage
     * @return ErrorResponse
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @param string $errorCode
     * @return ErrorResponse
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @param array $signatureFrom
     * @return ErrorResponse
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
