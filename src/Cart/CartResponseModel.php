<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Model\Cart;
use PayEye\Lib\Model\Product;
use PayEye\Lib\Model\PromoCode;
use PayEye\Lib\Model\ShippingMethod;
use PayEye\Lib\Model\Shop;
use PayEye\Lib\Tool\Builder;

class CartResponseModel
{
    use Builder;

    /** @var Shop */
    public $shop;

    /** @var PromoCode[] */
    public $promoCodes;

    /** @var string|null */
    public $shippingId;

    /** @var ShippingMethod[] */
    public $shippingMethods;

    /** @var Cart */
    public $cart;

    /** @var string */
    public $currency;

    /** @var Product[] */
    public $products;

    /** @var string */
    public $cartHash;

    /**
     * @var string
     * @see CartType;
     */
    public $cartType;

    /** @var string[] */
    public $signatureFrom;

    public static function createFromArray(array $context): self
    {
        $shippingMethods = array_map(static function (array $shipping) {
            return ShippingMethod::createFromArray($shipping);
        }, $context['shippingMethods']);

        $products = array_map(static function (array $product) {
            return Product::createFromArray($product);
        }, $context['products']);

        $promoCodes = array_map(static function (array $product) {
            return PromoCode::createFromArray($product);
        }, $context['promoCodes']);

        return self::builder()
            ->setShop(Shop::createFromArray($context['shop']))
            ->setPromoCodes($promoCodes)
            ->setShippingId($context['shippingId'])
            ->setShippingMethods($shippingMethods)
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
     * @param PromoCode[] $promoCodes
     */
    public function setPromoCodes(array $promoCodes): self
    {
        $this->promoCodes = $promoCodes;

        return $this;
    }

    public function setShippingId(?string $shippingId): self
    {
        $this->shippingId = $shippingId;

        return $this;
    }

    /**
     * @param ShippingMethod[] $shippingMethods
     */
    public function setShippingMethods(array $shippingMethods): self
    {
        $this->shippingMethods = $shippingMethods;

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

    public function setCartType(string $cartType): self
    {
        $this->cartType = $cartType;

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
