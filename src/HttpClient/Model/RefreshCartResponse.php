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

    /**
     * @param string $status
     * @param array $signatureFrom
     * @param string $signature
     * @return RefreshCartResponse
     */
    public static function create(string $status, array $signatureFrom, string $signature): self
    {
        $object = new self();

        $object->status = $status;
        $object->signatureFrom = $signatureFrom;
        $object->signature = $signature;

        return $object;
    }

    /**
     * @param array $context
     * @return RefreshCartResponse
     */
    public static function createFromArray(array $context): self
    {
        return self::create(
            $context['status'],
            $context['signatureFrom'],
            $context['signature']
        );
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @return array
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }
}
