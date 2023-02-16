<?php

namespace PayEye\Lib\Enum;

abstract class SignatureFrom
{
    public const REFRESH_CART_REQUEST = ['cartId', 'shopIdentifier', 'eventType'];
    public const GET_CART_RESPONSE = ['cart', 'products', 'currency', 'promoCodes', 'shipping', 'shop', 'shippingId', 'cartHash'];
    public const CART_COUPON_APPLY_RESPONSE = ['status'];
    public const CART_COUPON_REMOVE_RESPONSE = ['status'];
    public const VERIFY_KEYS_RESPONSE = ['status'];
    public const CREATE_ORDER_RESPONSE = ['checkoutUrl', 'orderId', 'totalAmount', 'cartAmount', 'shippingAmount', 'currency'];
    public const UPDATE_STATUS_ORDER_RESPONSE = ['status'];
    public const HANDLE_ERROR = ['errorMessage', 'errorCode'];
}
