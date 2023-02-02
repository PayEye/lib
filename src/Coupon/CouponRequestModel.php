<?php

declare(strict_types=1);

namespace PayEye\Lib\Coupon;

use PayEye\Lib\Tool\Builder;

class CouponRequestModel
{
    use Builder;

    /** @var string */
    private $cartId;

    /** @var string */
    private $promoCode;

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->promoCode = $request['promoCode'];
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
