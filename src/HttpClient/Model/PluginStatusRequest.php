<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

use PayEye\Lib\Tool\Builder;

class PluginStatusRequest
{
    use Builder;
    use PluginStatusTrait;

    public static function create(
        int $apiVersion
        , string $shopIdentifier
        , string $pluginMode
        , string $languageVersion
        , string $platformVersion
        , string $pluginVersion
        , string $pluginEvent
        , ?array $pluginConfig
    ): self
    {
        $object = new self();

        $object->apiVersion = $apiVersion;
        $object->shopIdentifier = $shopIdentifier;
        $object->pluginMode = $pluginMode;
        $object->languageVersion = $languageVersion;
        $object->platformVersion = $platformVersion;
        $object->pluginVersion = $pluginVersion;
        $object->pluginEvent = $pluginEvent;
        $object->pluginConfig = $pluginConfig;

        return $object;
    }
}
