<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class ShippingMethod
{
    use Builder;

    /** @var string */
    public $id;

    /** @var string */
    public $label;

    /** @var int */
    public $cost;

    /** @var int */
    public $regularCost;

    /** @var string */
    public $type;

    /**
     * @param array $context
     * @return ShippingMethod
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setLabel($context['label'])
            ->setCost($context['cost'])
            ->setRegularCost($context['regularCost'])
            ->setType($context['type']);
    }

    /**
     * @param string $id
     * @return ShippingMethod
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $label
     * @return ShippingMethod
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param int $cost
     * @return ShippingMethod
     */
    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @param int $regularCost
     * @return ShippingMethod
     */
    public function setRegularCost(int $regularCost): self
    {
        $this->regularCost = $regularCost;

        return $this;
    }

    /**
     * @param string $type
     * @return ShippingMethod
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * @return int
     */
    public function getRegularCost(): int
    {
        return $this->regularCost;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
