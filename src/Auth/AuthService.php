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

    public function __construct(HashService $hashService, array $signatureFrom, array $payload)
    {
        $this->hashService = $hashService;
        $this->signatureFrom = $signatureFrom;
        $this->payload = $payload;
    }

    public function getSignature(): string
    {
        return $this->hashService->hash($this->getJsonSignatureFrom());
    }

    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    private function getJsonSignatureFrom(): string
    {
        $data = [];

        foreach ($this->signatureFrom as $key) {
            $data[$key] = $this->payload[$key];
        }

        return JsonHelper::jsonEncode($data);
    }
}
