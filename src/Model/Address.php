<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Address
{
    /** @var null|string */
    private $street;

    /** @var null|string */
    private $buildingNumber;

    /** @var null|string */
    private $flatNumber;

    /** @var string */
    private $postCode;

    /** @var string */
    private $city;

    /** @var string */
    private $country;

    /** @var string */
    private $firstLine;

    /** @var string */
    private $fullAddress;

    public function __construct(array $context)
    {
        $this->street = $context['street'];
        $this->buildingNumber = $context['buildingNumber'];
        $this->flatNumber = $context['flatNumber'];
        $this->postCode = $context['postCode'];
        $this->city = $context['city'];
        $this->country = $context['country'];

        $this->firstLine = $this->street ?? $this->city;

        if ($this->buildingNumber) {
            $this->firstLine .= ' '.$this->buildingNumber;

            if ($this->flatNumber) {
                $this->firstLine .= '/'.$this->flatNumber;
            }
        } elseif ($this->flatNumber) {
            $this->firstLine .= ' '.$this->flatNumber;
        }

        $this->fullAddress = $this->firstLine.', '.$this->postCode.' '.$this->city.', '.$this->country;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
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

    public function getFirstLine(): string
    {
        return $this->firstLine;
    }

    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }
}
