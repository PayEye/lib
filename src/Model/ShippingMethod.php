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

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setLabel($context['label'])
            ->setCost($context['cost'])
            ->setRegularCost($context['regularCost'])
            ->setType($context['type']);
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    public function setRegularCost(int $regularCost): self
    {
        $this->regularCost = $regularCost;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
