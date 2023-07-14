<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

use PayEye\Lib\Model\Cart;
use PayEye\Lib\Tool\JsonHelper;

class HashService
{
    /** @var AuthConfig */
    private $authConfig;

    /**
     * @param \PayEye\Lib\Auth\AuthConfig $authConfig
     * @return HashService
     */
    public static function create(AuthConfig $authConfig): self
    {
        $object = new self();

        $object->authConfig = $authConfig;

        return $object;
    }

    /**
     * @param string $json
     * @return string
     */
    public function hash(string $json): string
    {
        return hash('sha256', $this->authConfig->getPrivateKey().$this->authConfig->getPublicKey().$json);
    }

    /**
     * @param \PayEye\Lib\Model\PromoCode[] $promoCodes
     * @param \PayEye\Lib\Model\ShippingMethod[] $shippingMethods
     * @param \PayEye\Lib\Model\Cart $cart
     * @param \PayEye\Lib\Model\Product[] $products
     * @param string|null $shippingId
     * @param string $currency
     * @return string
     */
    public function cartHash(
        array $promoCodes,
        array $shippingMethods,
        Cart $cart,
        ?string $shippingId,
        string $currency,
        array $products
    ): string {
        return $this->hash(JsonHelper::jsonEncode([$promoCodes, $shippingId, $shippingMethods, $cart, $currency, $products]));
    }

    /**
     * @return \PayEye\Lib\Auth\AuthConfig
     */
    public function getAuthConfig(): AuthConfig
    {
        return $this->authConfig;
    }

    /**
     * @param \PayEye\Lib\Auth\AuthConfig $authConfig
     * @return HashService
     */
    public function setAuthConfig(AuthConfig $authConfig): self
    {
        $this->authConfig = $authConfig;

        return $this;
    }
}
