<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class ProductAttribute
{
    use Builder;

    /** @var string|null */
    public $id = null;

    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /**
     * @param array $context
     * @return ProductAttribute
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setId($context['id'] ?? null)
            ->setName($context['name'])
            ->setValue($context['value']);
    }

    /**
     * @param string $name
     * @return ProductAttribute
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $value
     * @return ProductAttribute
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param string|null $id
     * @return ProductAttribute
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
