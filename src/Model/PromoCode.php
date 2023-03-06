<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class PromoCode
{
    use Builder;

    /** @var string|null */
    public $code;

    /** @var string */
    public $type;

    /** @var int */
    public $value;

    /** @var bool */
    public $freeDelivery;

    /** @var bool */
    public $payeyeCode;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCode($context['code'])
            ->setType($context['type'])
            ->setValue($context['value'])
            ->setFreeDelivery($context['freeDelivery'])
            ->setPayeyeCode($context['payeyeCode']);
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function setFreeDelivery(bool $freeDelivery): self
    {
        $this->freeDelivery = $freeDelivery;
        return $this;
    }

    public function setPayeyeCode(bool $payeyeCode): self
    {
        $this->payeyeCode = $payeyeCode;
        return $this;
    }
}
