<?php

declare(strict_types=1);

namespace PayEye\Lib\Deeplink;

use PayEye\Lib\Auth\AuthConfig;
use PayEye\Lib\Env\Config;

class Deeplink
{
    /**
     * @param \PayEye\Lib\Env\Config $config
     * @param \PayEye\Lib\Auth\AuthConfig $authConfig
     * @param string $cartId
     * @return string
     */
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
