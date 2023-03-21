<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class PickupPoint
{
    use Builder;

    /** @var string */
    public $name;

    /** @var Location */
    public $location;

    /**
     * @var string
     * @see PickupPointType
     */
    public $type;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setName($context['name'])
            ->setLocation(Location::createFromArray($context['location']))
            ->setType($context['type']);
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
