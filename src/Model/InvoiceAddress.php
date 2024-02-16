<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class InvoiceAddress
{
    use Builder;

    /** @var null|string */
    private $street;

    /** @var null|string */
    private $buildingNo;

    /** @var null|string */
    private $flatNo;

    /** @var string */
    private $city;

    /** @var string */
    private $postalCode;

    /** @var string */
    private $countryCode;

    /**
     * @param array $context
     * @return InvoiceAddress
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->street = $context['street'];
        $object->buildingNo = $context['buildingNo'];
        $object->flatNo = $context['flatNo'];
        $object->postalCode = $context['postalCode'];
        $object->city = $context['city'];
        $object->countryCode = $context['countryCode'];

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
    public function getBuildingNo(): ?string
    {
        return $this->buildingNo;
    }

    /**
     * @return string|null
     */
    public function getFlatNo(): ?string
    {
        return $this->flatNo;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string|null $street
     * @return InvoiceAddress
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param string|null $buildingNo
     * @return InvoiceAddress
     */
    public function setBuildingNo(?string $buildingNo): self
    {
        $this->buildingNo = $buildingNo;

        return $this;
    }

    /**
     * @param string|null $flatNo
     * @return InvoiceAddress
     */
    public function setFlatNo(?string $flatNo): self
    {
        $this->flatNo = $flatNo;

        return $this;
    }

    /**
     * @param string $postalCode
     * @return InvoiceAddress
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @param string $countryCode
     * @return InvoiceAddress
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @param string $city
     * @return InvoiceAddress
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
