<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class RefundProduct
{
    use Builder;

    /** @var int */
    public $id;

    /** @var string|null */
    public $variantId = null;

    /** @var int */
    public $quantity;

    /** @var string[] */
    public $attributesIds = [];

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setVariantId($context['variantId'] ?? null)
            ->setQuantity($context['quantity'])
            ->setAttributesIds($context['attributesIds'] ?? []);
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setAttributesIds(array $attributesIds): self
    {
        $this->attributesIds = $attributesIds;

        return $this;
    }
}
