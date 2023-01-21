<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Address
{
    /** @var null|string */
    private $street;

    /** @var string */
    private $homeNumber;

    /** @var null|string */
    private $flatNumber;

    /** @var string */
    private $postCode;

    /** @var string */
    private $city;

    /** @var string */
    private $country;

    /** @var string */
    private $fullAddress;

    public function __construct(array $context)
    {
        $this->street = $context['street'];
        $this->homeNumber = $context['homeNumber'];
        $this->flatNumber = $context['flatNumber'];
        $this->postCode = $context['postCode'];
        $this->city = $context['city'];
        $this->country = $context['country'];

        $this->fullAddress = $this->getStreet() . ' ' . $this->getHomeNumber() . '/' . $this->getFlatNumber();
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getHomeNumber(): string
    {
        return $this->homeNumber;
    }

    public function getFlatNumber(): ?string
    {
        return $this->flatNumber;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }
}
