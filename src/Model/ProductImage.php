<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class ProductImage
{
    use Builder;

    /** @var string|null */
    public $thumbnail = null;

    /** @var string|null */
    public $full = null;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setThumbnail($context['thumbnail'])
            ->setFull($context['full']);
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function setFull(?string $full): self
    {
        $this->full = $full;

        return $this;
    }
}
