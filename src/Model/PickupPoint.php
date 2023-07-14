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

    /**
     * @param array $context
     * @return PickupPoint
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setName($context['name'])
            ->setLocation(Location::createFromArray($context['location']))
            ->setType($context['type']);
    }

    /**
     * @param string $name
     * @return PickupPoint
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Location $location
     * @return PickupPoint
     */
    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @param string $type
     * @return PickupPoint
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \PayEye\Lib\Model\Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
