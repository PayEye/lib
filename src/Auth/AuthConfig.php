<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

class AuthConfig
{
    /** @var string */
    private $shopId;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $privateKey;

    public function __construct(string $shopId, string $publicKey, string $privateKey)
    {
        $this->shopId = $shopId;
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }
}
