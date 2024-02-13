<?php

namespace PayEye\Lib\Plugin;

class PluginStatusResponseModel
{
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

    public static function create(
        int $apiVersion
        , string $shopIdentifier
        , string $pluginMode
        , string $languageVersion
        , string $platformVersion
        , string $pluginVersion
        , string $pluginEvent
        , array $pluginConfig
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
}
