<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Product
{
    use Builder;

    /** @var int */
    public $id;

    /** @var int */
    public $price;

    /** @var int */
    public $regularPrice;

    /** @var string */
    public $name;

    /** @var int */
    public $quantity;

    /** @var ProductImages */
    public $images;

    /** @var ProductAttribute[] */
    public $attributes;

    public static function createFromArray(array $context): self
    {
        $attributes = array_map(static function (array $attribute) {
            return ProductAttribute::createFromArray($attribute);
        }, $context['attributes']);

        return self::builder()
            ->setId($context['id'])
            ->setPrice($context['price'])
            ->setRegularPrice($context['regularPrice'])
            ->setName($context['name'])
            ->setQuantity($context['quantity'])
            ->setImages(ProductImages::createFromArray($context['images']))
            ->setAttributes($attributes);
    }


    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }


    public function setRegularPrice(int $regularPrice): self
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }


    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setImages(ProductImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ProductAttribute[] $attributes
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
