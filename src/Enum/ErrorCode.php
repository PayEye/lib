<?php

declare(strict_types=1);

namespace PayEye\Lib\Enum;

abstract class ErrorCode
{
    public const CART_CONTENT_NOT_MATCHED = 'CART_CONTENT_NOT_MATCHED';
    public const CART_NOT_FOUND = 'CART_NOT_FOUND';
    public const CART_EMPTY = 'CART_EMPTY';
    public const INVALID_COUPON = 'INVALID_COUPON';
    public const INVALID_POST_CODE = 'INVALID_POST_CODE';
    public const INVALID_PRODUCT_STOCK = 'INVALID_PRODUCT_STOCK';
    public const APPLIED_COUPON = 'APPLIED_COUPON';
    public const INVALID_SHIPPING = 'INVALID_SHIPPING';
    public const ORDER_NOT_FOUND = 'ORDER_NOT_FOUND';
    public const ORDER_PAID = 'ORDER_PAID';
    public const ORDER_FAILED = 'ORDER_FAILED';
    public const SHOP_ID_NOT_MATCHED = 'SHOP_ID_NOT_MATCHED';
    public const PAYEYE_PAYMENT_IS_DISABLED = 'PAYEYE_PAYMENT_IS_DISABLED';
    public const SHIPPING_PROVIDER_NOT_MATCHED = 'SHIPPING_PROVIDER_NOT_MATCHED';

    public const WOOCOMMERCE = 'WOOCOMMERCE';
    public const PRESTASHOP = 'PRESTASHOP';
}
