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

    /**
     * @param array $context
     * @return ProductImages
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setFullUrl($context['fullUrl'])
            ->setThumbnailUrl($context['thumbnailUrl']);
    }

    /**
     * @param string|null $fullUrl
     * @return ProductImages
     */
    public function setFullUrl(?string $fullUrl): self
    {
        $this->fullUrl = $fullUrl;

        return $this;
    }

    /**
     * @param string|null $thumbnailUrl
     * @return ProductImages
     */
    public function setThumbnailUrl(?string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullUrl(): ?string
    {
        return $this->fullUrl;
    }

    /**
     * @return string|null
     */
    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }
}
