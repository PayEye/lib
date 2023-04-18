<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class ProductImages
{
    use Builder;

    /** @var string|null */
    public $fullUrl = null;

    /** @var string|null */
    public $thumbnailUrl = null;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setFullUrl($context['fullUrl'])
            ->setThumbnailUrl($context['thumbnailUrl']);
    }

    public function setFullUrl(?string $fullUrl): self
    {
        $this->fullUrl = $fullUrl;

        return $this;
    }

    public function setThumbnailUrl(?string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }
}
