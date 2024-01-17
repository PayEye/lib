<?php

declare(strict_types=1);

namespace PayEye\Lib\Cart;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Model\Cart;
use PayEye\Lib\Model\Product;
use PayEye\Lib\Model\PromoCode;
use PayEye\Lib\Model\ShippingMethod;
use PayEye\Lib\Model\Shop;
use PayEye\Lib\Tool\Builder;

class CartResponseModel implements SignedContent
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
    public $signatureFrom = ['cart', 'products', 'currency', 'promoCodes', 'shippingMethods', 'shop', 'shippingId', 'cartHash'];

    /** @var string */
    public $signature;

    /**
     * @param array $context
     * @return CartResponseModel
     */
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
            ->setCartType($context['cartType'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature'] ?? '');
    }

    /**
     * @param \PayEye\Lib\Model\Shop $shop
     * @return CartResponseModel
     */
    public function setShop(Shop $shop): self
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\PromoCode[] $promoCodes
     * @return CartResponseModel
     */
    public function setPromoCodes(array $promoCodes): self
    {
        $this->promoCodes = $promoCodes;

        return $this;
    }

    /**
     * @param string|null $shippingId
     * @return CartResponseModel
     */
    public function setShippingId(?string $shippingId): self
    {
        $this->shippingId = $shippingId;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\ShippingMethod[] $shippingMethods
     * @return CartResponseModel
     */
    public function setShippingMethods(array $shippingMethods): self
    {
        $this->shippingMethods = $shippingMethods;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Cart $cart
     * @return CartResponseModel
     */
    public function setCart(Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param string $currency
     * @return CartResponseModel
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Product[] $products
     * @return CartResponseModel
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @param string $cartHash
     * @return CartResponseModel
     */
    public function setCartHash(string $cartHash): self
    {
        $this->cartHash = $cartHash;

        return $this;
    }

    /**
     * @param string $cartType
     * @return CartResponseModel
     */
    public function setCartType(string $cartType): self
    {
        $this->cartType = $cartType;

        return $this;
    }

    /**
     * @param array $signatureFrom
     * @return CartResponseModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }

    /**
     * @param string $signature
     * @return CartResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return \PayEye\Lib\Model\Shop
     */
    public function getShop(): Shop
    {
        return $this->shop;
    }

    /**
     * @return \PayEye\Lib\Model\PromoCode[]
     */
    public function getPromoCodes(): array
    {
        return $this->promoCodes;
    }

    /**
     * @return string|null
     */
    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    /**
     * @return string
     */
    public function getCartType(): string
    {
        return $this->cartType;
    }

    /**
     * @return \PayEye\Lib\Model\ShippingMethod[]
     */
    public function getShippingMethods(): array
    {
        return $this->shippingMethods;
    }

    /**
     * @return \PayEye\Lib\Model\Cart
     */
    public function getCart(): Cart
    {
        return $this->cart;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return \PayEye\Lib\Model\Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return string
     */
    public function getCartHash(): string
    {
        return $this->cartHash;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }
}
