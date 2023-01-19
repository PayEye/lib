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

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setName($context['name'])
            ->setUrl($context['url']);
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
