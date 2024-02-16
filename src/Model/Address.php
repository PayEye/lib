<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Address
{
    use Builder;

    /** @var string */
    private $country;

    /** @var string */
    private $city;

    /** @var string */
    private $postCode;

    /** @var null|string */
    private $street;

    /** @var null|string */
    private $buildingNumber;

    /** @var null|string */
    private $flatNumber;

    /**
     * @param array $context
     * @return Address
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->street = $context['street'];
        $object->buildingNumber = $context['buildingNumber'];
        $object->flatNumber = $context['flatNumber'];
        $object->postCode = $context['postCode'];
        $object->city = $context['city'];
        $object->country = $context['country'];

        return $object;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string|null
     */
    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }

    /**
     * @return string|null
     */
    public function getFlatNumber(): ?string
    {
        return $this->flatNumber;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string|null $street
     * @return Address
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param string|null $buildingNumber
     * @return Address
     */
    public function setBuildingNumber(?string $buildingNumber): self
    {
        $this->buildingNumber = $buildingNumber;

        return $this;
    }

    /**
     * @param string|null $flatNumber
     * @return Address
     */
    public function setFlatNumber(?string $flatNumber): self
    {
        $this->flatNumber = $flatNumber;

        return $this;
    }

    /**
     * @param string $postCode
     * @return Address
     */
    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
