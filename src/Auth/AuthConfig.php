<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

use PayEye\Lib\Tool\Builder;

class AuthConfig
{
    use Builder;

    /** @var string */
    private $shopId;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $privateKey;

    /**
     * @param string $shopId
     * @param string $publicKey
     * @param string $privateKey
     * @return AuthConfig
     */
    public static function create(string $shopId, string $publicKey, string $privateKey): self
    {
        $object = self::builder();

        $object->shopId = $shopId;
        $object->publicKey = $publicKey;
        $object->privateKey = $privateKey;

        return $object;
    }

    /**
     * @return string
     */
    public function getShopId(): string
    {
        return $this->shopId;
    }

    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    /**
     * @param string $shopId
     * @return AuthConfig
     */
    public function setShopId(string $shopId): self
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * @param string $publicKey
     * @return AuthConfig
     */
    public function setPublicKey(string $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * @param string $privateKey
     * @return AuthConfig
     */
    public function setPrivateKey(string $privateKey): self
    {
        $this->privateKey = $privateKey;

        return $this;
    }
}
