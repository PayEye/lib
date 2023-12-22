<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Shop
{
    use Builder;

    /** @var string */
    public $name;

    /** @var string */
    public $url;

    /**
     * @param array $context
     * @return Shop
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setName($context['name'])
            ->setUrl($context['url']);
    }

    /**
     * @param string $name
     * @return Shop
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $url
     * @return Shop
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
