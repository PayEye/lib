<?php

declare(strict_types=1);

namespace PayEye\Lib\PromoCode;

use PayEye\Lib\Tool\Builder;

class PromoCodeRequestModel
{
    use Builder;

    /** @var string */
    public $cartId;

    /** @var string */
    public $promoCode;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCartId($context['cartId'])
            ->setPromoCode($context['promoCode']);
    }

    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    public function setPromoCode(string $promoCode): self
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getPromoCode(): string
    {
        return $this->promoCode;
    }
}
