<?php

namespace PayEye\Lib\Plugin;

use PayEye\Lib\Tool\Builder;
use PayEye\Lib\Interfaces\SignedContent;

class PluginStatusRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $shopIdentifier;

    /** @var string */
    public $pluginEvent;

    /** @var string */
    public $pluginMode;

    /** @var ?array */
    public $pluginConfig;

    /** @var array */
    public $signatureFrom;

    /** @var string */
    public $signature;

    /**
     * @param array $context
     * @return PluginStatusRequestModel
     */
    public static function createFromArray(array $context)
    {
        return self::builder()
            ->setShopIdentifier($context['shopIdentifier'])
            ->setPluginEvent($context['pluginEvent'])
            ->setPluginMode($context['pluginMode'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature']);
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
     * @return PluginStatusRequestModel
     */
    public function setShopIdentifier(string $shopId): self
    {
        $this->shopIdentifier = $shopId;

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
     * @return PluginStatusRequestModel
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
     * @return PluginStatusRequestModel
     */
    public function setPluginMode(string $pluginMode): self
    {
        $this->pluginMode = $pluginMode;

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
     * @return PluginStatusRequestModel
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
     * @return PluginStatusRequestModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
