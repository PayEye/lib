<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Product
{
    use Builder;

    /** @var int */
    public $id;

    /** @var string|null */
    public $variantId = null;

    /** @var int */
    public $price;

    /** @var int */
    public $regularPrice;

    /** @var int */
    public $totalPrice;

    /** @var string */
    public $name;

    /** @var int */
    public $quantity;

    /** @var ProductImages */
    public $images;

    /** @var ProductAttribute[] */
    public $attributes;

    /**
     * @param array $context
     * @return Product
     */
    public static function createFromArray(array $context): self
    {
        $attributes = array_map(static function (array $attribute) {
            return ProductAttribute::createFromArray($attribute);
        }, $context['attributes']);

        return self::builder()
            ->setId($context['id'])
            ->setPrice($context['price'])
            ->setVariantId($context['variantId'] ?? null)
            ->setRegularPrice($context['regularPrice'])
            ->setTotalPrice($context['totalPrice'])
            ->setName($context['name'])
            ->setQuantity($context['quantity'])
            ->setImages(ProductImages::createFromArray($context['images']))
            ->setAttributes($attributes);
    }


    /**
     * @param int $id
     * @return Product
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string|null $variantId
     * @return Product
     */
    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param int $price
     * @return Product
     */
    public function setPrice(
        int $price
    ): self {
        $this->price = $price;

        return $this;
    }


    /**
     * @param int $regularPrice
     * @return Product
     */
    public function setRegularPrice(int $regularPrice): self
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }

    /**
     * @param int $totalPrice
     * @return Product
     */
    public function setTotalPrice(int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @param int $quantity
     * @return Product
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\ProductImages $images
     * @return Product
     */
    public function setImages(ProductImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getRegularPrice(): int
    {
        return $this->regularPrice;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return \PayEye\Lib\Model\ProductImages
     */
    public function getImages(): ProductImages
    {
        return $this->images;
    }

    /**
     * @return \PayEye\Lib\Model\ProductAttribute[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
