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
    private $coupon;

    public function __construct(array $request)
    {
        $this->cartId = $request['cartId'];
        $this->coupon = $request['coupon'];
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getCoupon(): string
    {
        return $this->coupon;
    }
}
