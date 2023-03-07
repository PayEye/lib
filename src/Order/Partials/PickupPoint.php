<?php

declare(strict_types=1);

namespace PayEye\Lib\Order\Partials;

class PickupPoint
{
    /** @var string */
    private $name;

    /** @var Location */
    private $location;

    public function __construct(array $context)
    {
        $this->name = $context['name'];
        $this->location = new Location($context['location']);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }
}
