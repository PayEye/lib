<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class RefundProduct
{
    use Builder;

    /** @var */
    public $id;

    /** @var int */
    public $quantity;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'])
            ->setQuantity($context['quantity']);
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
