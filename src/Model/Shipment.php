<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Shipment
{
    /** @var string */
    private $postCode;

    /** @var string */
    private $country;

    public function __construct(string $postCode, string $country)
    {
        $this->postCode = $postCode;
        $this->country = $country;
    }

    public static function createFromArray(array $context): self
    {
        return new self(
            $context['postCode'],
            $context['country']
        );
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
}
