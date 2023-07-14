<?php

declare(strict_types=1);

namespace PayEye\Lib\Env;

use RuntimeException;

class Config
{
    /** @var string */
    private $url;

    /** @var string */
    private $deepLink;

    /** @var self */
    private static $instance;

    /**
     * @param string $url
     * @param string $deepLink
     * @return Config
     */
    public static function create(string $url, string $deepLink): self
    {
        $object = new self();

        $object->url = $url;
        $object->deepLink = $deepLink;

        self::$instance = $object;

        return $object;
    }

    /**
     * @param array $context
     * @return Config
     */
    public static function createFromArray(array $context): self
    {
        return self::create($context['url'], $context['deepLinkUrl']);
    }

    /**
     * @return Config
     */
    public static function getInstance(): self
    {
        if (!self::$instance) {
            throw new RuntimeException('Instance does not exist. Create this object onInit application.');
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getDeepLinkUrl(): string
    {
        return $this->deepLink;
    }

    /**
     * @param string $url
     * @return Config
     */
    public function setUrl(string $url): Config
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param string $deepLink
     * @return Config
     */
    public function setDeepLink(string $deepLink): Config
    {
        $this->deepLink = $deepLink;

        return $this;
    }
}
