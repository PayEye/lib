<?php

declare(strict_types=1);

namespace PayEye\Lib\Auth;

use PayEye\Lib\Model\Cart;
use PayEye\Lib\Model\Coupon;
use PayEye\Lib\Model\Product;
use PayEye\Lib\Model\PromoCode;
use PayEye\Lib\Model\Shipping;
use PayEye\Lib\Tool\JsonHelper;

class HashService
{
    /** @var AuthConfig */
    private $authConfig;

    public function __construct(AuthConfig $authConfig)
    {
        $this->authConfig = $authConfig;
    }

    public function hash(string $json): string
    {
        return hash('sha256', $this->authConfig->getSecretKey() . $this->authConfig->getPublicKey() . $json);
    }

    /**
     * @param PromoCode[] $promoCodes
     * @param Shipping[] $shipping
     * @param Cart $cart
     * @param Product[] $products
     * @param string|null $shippingId
     * @param string $currency
     * @return string
     */
    public function cartHash(
        array $promoCodes,
        array $shipping,
        Cart $cart,
        ?string $shippingId,
        string $currency,
        array $products
    ): string {
        return $this->hash(JsonHelper::jsonEncode([$promoCodes, $shippingId, $shipping, $cart, $currency, $products]));
    }
}
