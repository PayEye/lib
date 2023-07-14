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

    /**
     * @param array $context
     * @return RefundProduct
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setVariantId($context['variantId'] ?? null)
            ->setQuantity($context['quantity'])
            ->setAttributesIds($context['attributesIds'] ?? []);
    }

    /**
     * @param $id
     * @return RefundProduct
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string|null $variantId
     * @return RefundProduct
     */
    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param int $quantity
     * @return RefundProduct
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param array $attributesIds
     * @return RefundProduct
     */
    public function setAttributesIds(array $attributesIds): self
    {
        $this->attributesIds = $attributesIds;

        return $this;
    }
}
