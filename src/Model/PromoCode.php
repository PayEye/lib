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

    /**
     * @param array $context
     * @return PromoCode
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCode($context['code'])
            ->setType($context['type'])
            ->setValue($context['value'])
            ->setFreeDelivery($context['freeDelivery'])
            ->setPayeyeCode($context['payeyeCode']);
    }

    /**
     * @param string|null $code
     * @return PromoCode
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param string $type
     * @return PromoCode
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $value
     * @return PromoCode
     */
    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param bool $freeDelivery
     * @return PromoCode
     */
    public function setFreeDelivery(bool $freeDelivery): self
    {
        $this->freeDelivery = $freeDelivery;

        return $this;
    }

    /**
     * @param bool $payeyeCode
     * @return PromoCode
     */
    public function setPayeyeCode(bool $payeyeCode): self
    {
        $this->payeyeCode = $payeyeCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFreeDelivery(): bool
    {
        return $this->freeDelivery;
    }

    /**
     * @return bool
     */
    public function isPayeyeCode(): bool
    {
        return $this->payeyeCode;
    }
}
