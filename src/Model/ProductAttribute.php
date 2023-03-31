<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class ProductAttribute
{
    use Builder;

    /** @var string */
    public $name;

    /** @var string */
    public $value;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setName($context['name'])
            ->setValue($context['value']);
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
