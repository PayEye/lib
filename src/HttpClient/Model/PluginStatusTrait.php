<?php

namespace PayEye\Lib\HttpClient\Model;

trait PluginStatusTrait
{
    protected $apiVersion;
    protected $shopIdentifier;

    protected $pluginMode;
    protected $languageVersion;
    protected $platformVersion;
    protected $pluginVersion;
    protected $pluginEvent;

    protected $pluginConfig;

    public function getApiVersion(): int
    {
        return $this->apiVersion;
    }

    public function setApiVersion(int $apiVersion): self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    public function getShopIdentifier(): int
    {
        return $this->shopIdentifier;
    }

    public function setShopIdentifier(string $shopId): self
    {
        $this->shopIdentifier = $shopId;
        return $this;
    }

    public function getLanguageVersion(): string
    {
        return $this->languageVersion;
    }

    public function setLanguageVersion(string $languageVersion): self
    {
        $this->languageVersion = $languageVersion;
        return $this;
    }

    public function getPlatformVersion(): string
    {
        return $this->platformVersion;
    }

    public function setPlatformVersion(string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;
        return $this;
    }

    public function getPluginVersion(): string
    {
        return $this->pluginVersion;
    }

    public function setPluginVersion(string $pluginVersion): self
    {
        $this->pluginVersion = $pluginVersion;
        return $this;
    }

    public function getPluginEvent(): string
    {
        return $this->pluginEvent;
    }

    public function setPluginEvent(string $pluginEvent): self
    {
        $this->pluginEvent = $pluginEvent;
        return $this;
    }

    public function getPluginMode(): string
    {
        return $this->pluginMode;
    }

    public function setPluginMode(string $pluginMode): self
    {
        $this->pluginMode = $pluginMode;
        return $this;
    }

    public function getPluginConfig(): array
    {
        return $this->pluginConfig;
    }

    public function setPluginConfig(?array $pluginConfig): self
    {
        $this->pluginConfig = $pluginConfig;
        return $this;
    }
}