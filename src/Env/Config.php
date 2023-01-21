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

    public function __construct(string $url, string $deepLink)
    {
        $this->url = $url;
        $this->deepLink = $deepLink;

        self::$instance = $this;
    }

    public static function createFromArray(array $context): self
    {
        return new self(
            $context['url'],
            $context['deepLinkUrl']
        );
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            throw new RuntimeException('Instance does not exist. Create this object onInit application.');
        }

        return self::$instance;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getDeepLinkUrl(): string
    {
        return $this->deepLink;
    }
}
