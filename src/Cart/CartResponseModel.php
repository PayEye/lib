<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Model\Cart;
use PayEye\Lib\Model\Coupon;
use PayEye\Lib\Model\Product;
use PayEye\Lib\Model\Shipping;
use PayEye\Lib\Model\Shop;
use PayEye\Lib\Tool\Builder;

class CartResponseModel
{
    use Builder;

    /** @var Shop */
    public $shop;

    /** @var Coupon[] */
    public $coupons;

    /** @var string|null */
    public $shippingId;

    /** @var Shipping[] */
    public $shipping;

    /** @var Cart */
    public $cart;

    /** @var string */
    public $currency;

    /** @var Product[] */
    public $products;

    /** @var string */
    public $cartHash;

    /** @var string[] */
    public $signatureFrom;

    public static function createFromArray(array $context): self
    {
        $shipping = array_map(static function (array $shipping) {
            return Shipping::createFromArray($shipping);
        }, $context['shipping']);

        $products = array_map(static function (array $product) {
            return Product::createFromArray($product);
        }, $context['products']);

        return self::builder()
            ->setShop(Shop::createFromArray($context['shop']))
            ->setCoupons($context['coupons'])
            ->setShippingId($context['shippingId'])
            ->setShipping($shipping)
            ->setCart(Cart::createFromArray($context['cart']))
            ->setCurrency($context['currency'])
            ->setProducts($products)
            ->setCartHash($context['cartHash'])
            ->setSignatureFrom($context['signatureFrom']);
    }

    public function setShop(Shop $shop): self
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * @param Coupon[] $coupons
     */
    public function setCoupons(array $coupons): self
    {
        $this->coupons = $coupons;
        return $this;
    }

    public function setShippingId(?string $shippingId): self
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    /**
     * @param Shipping[] $shipping
     */
    public function setShipping(array $shipping): self
    {
        $this->shipping = $shipping;
        return $this;
    }

    public function setCart(Cart $cart): self
    {
        $this->cart = $cart;
        return $this;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param Product[] $products
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;
        return $this;
    }

    public function setCartHash(string $cartHash): self
    {
        $this->cartHash = $cartHash;
        return $this;
    }

    /**
     * @param string[] $signatureFrom
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;
        return $this;
    }
}
