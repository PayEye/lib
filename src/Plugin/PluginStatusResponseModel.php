<?php

namespace PayEye\Lib\Plugin;

use PayEye\Lib\Tool\Builder;
use PayEye\Lib\Interfaces\SignedContent;

class PluginStatusResponseModel implements SignedContent
{
    use Builder;

    /** @var int */
    public $apiVersion;

    /** @var string */
    public $shopIdentifier;

    /** @var string */
    public $pluginMode;

    /** @var string */
    public $languageVersion;

    /** @var string */
    public $platformVersion;

    /** @var string */
    public $pluginVersion;

    /** @var string */
    public $pluginEvent;

    /** @var array */
    public $pluginConfig;

    /** @var array */
    public $signatureFrom;

    /** @var string */
    public $signature;

    /**
     * @param array $context
     * @return PluginStatusResponseModel
     */
    public static function createFromArray(array $context)
    {
        return self::builder()
            ->setApiVersion($context['apiVersion'])
            ->setShopIdentifier($context['shopIdentifier'])
            ->setPluginMode($context['pluginMode'])
            ->setLanguageVersion($context['languageVersion'])
            ->setPlatformVersion($context['platformVersion'])
            ->setPluginVersion($context['pluginVersion'])
            ->setPluginEvent($context['pluginEvent'])
            ->setPluginConfig($context['pluginConfig'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature'] ?? '');
    }

    /**
     * @return int
     */
    public function getApiVersion(): int
    {
        return $this->apiVersion;
    }

    /**
     * @param int $apiVersion
     * @return PluginStatusResponseModel
     */
    public function setApiVersion(int $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getShopIdentifier(): string
    {
        return $this->shopIdentifier;
    }

    /**
     * @param string $shopId
     * @return PluginStatusResponseModel
     */
    public function setShopIdentifier(string $shopId): self
    {
        $this->shopIdentifier = $shopId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageVersion(): string
    {
        return $this->languageVersion;
    }

    /**
     * @param string $languageVersion
     * @return PluginStatusResponseModel
     */
    public function setLanguageVersion(string $languageVersion): self
    {
        $this->languageVersion = $languageVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatformVersion(): string
    {
        return $this->platformVersion;
    }

    /**
     * @param string $platformVersion
     * @return PluginStatusResponseModel
     */
    public function setPlatformVersion(string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getPluginVersion(): string
    {
        return $this->pluginVersion;
    }

    /**
     * @param string $pluginVersion
     * @return PluginStatusResponseModel
     */
    public function setPluginVersion(string $pluginVersion): self
    {
        $this->pluginVersion = $pluginVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getPluginEvent(): string
    {
        return $this->pluginEvent;
    }

    /**
     * @param string $pluginEvent
     * @return PluginStatusResponseModel
     */
    public function setPluginEvent(string $pluginEvent): self
    {
        $this->pluginEvent = $pluginEvent;

        return $this;
    }

    /**
     * @return string
     */
    public function getPluginMode(): string
    {
        return $this->pluginMode;
    }

    /**
     * @param string $pluginMode
     * @return PluginStatusResponseModel
     */
    public function setPluginMode(string $pluginMode): self
    {
        $this->pluginMode = $pluginMode;

        return $this;
    }

    /**
     * @return array
     */
    public function getPluginConfig(): array
    {
        return $this->pluginConfig;
    }

    /**
     * @param array $pluginConfig
     * @return PluginStatusResponseModel
     */
    public function setPluginConfig(array $pluginConfig): self
    {
        $this->pluginConfig = $pluginConfig;

        return $this;
    }

    /**
     * @return array
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param array $signatureFrom
     * @return PluginStatusResponseModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return PluginStatusResponseModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
