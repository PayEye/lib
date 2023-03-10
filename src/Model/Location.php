<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Location
{
    /** @var double */
    private $lat;

    /** @var double */
    private $lng;

    public function __construct(array $context)
    {
        $this->lat = $context['lat'];
        $this->lng = $context['lng'];
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLng(): float
    {
        return $this->lng;
    }
}
