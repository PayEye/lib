<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Location
{
    use Builder;

    /** @var double */
    public $lat;

    /** @var double */
    public $lng;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setLat($context['lat'])
            ->setLng($context['lng']);
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function setLng(float $lng): self
    {
        $this->lng = $lng;

        return $this;
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
