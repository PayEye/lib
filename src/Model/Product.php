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

    /** @var string|null */
    public $imageUrl;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setPrice($context['price'])
            ->setRegularPrice($context['regularPrice'])
            ->setName($context['name'])
            ->setQuantity($context['quantity'])
            ->setImageUrl($context['imageUrl']);
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

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
}
