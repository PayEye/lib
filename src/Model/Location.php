<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Location
{
    use Builder;

    /** @var float */
    public $lat;

    /** @var float */
    public $lng;

    /**
     * @param array $context
     * @return Location
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setLat($context['lat'])
            ->setLng($context['lng']);
    }

    /**
     * @param float $lat
     * @return Location
     */
    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @param float $lng
     * @return Location
     */
    public function setLng(float $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLng(): float
    {
        return $this->lng;
    }
}
