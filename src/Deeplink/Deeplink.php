<?php

declare(strict_types=1);

namespace PayEye\Lib\Deeplink;

use PayEye\Lib\Auth\AuthConfig;
use PayEye\Lib\Env\Config;

class Deeplink
{
    public static function create(Config $config, AuthConfig $authConfig, string $cartId): string
    {
        $query = [
            'cartId' => $cartId,
            'shopId' => $authConfig->getShopId(),
        ];

        $query = http_build_query($query);

        return $config->getDeepLinkUrl().'?'.$query;
    }
}
