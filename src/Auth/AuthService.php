<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

use PayEye\Lib\Tool\JsonHelper;

class AuthService
{
    /** @var HashService */
    private $hashService;

    /** @var array */
    private $signatureFrom;

    /** @var array */
    private $payload;

    /**
     * @param \PayEye\Lib\Auth\HashService $hashService
     * @param array $signatureFrom
     * @param array $payload
     * @return AuthService
     */
    public static function create(HashService $hashService, array $signatureFrom, array $payload): self
    {
        $object = new self();

        $object->hashService = $hashService;
        $object->signatureFrom = $signatureFrom;
        $object->payload = $payload;

        return $object;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->hashService->hash($this->getJsonSignatureFrom());
    }

    /**
     * @return array
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    private function getJsonSignatureFrom(): string
    {
        $data = [];

        foreach ($this->signatureFrom as $key) {
            $data[$key] = $this->payload[$key];
        }

        return JsonHelper::jsonEncode($data);
    }
}
