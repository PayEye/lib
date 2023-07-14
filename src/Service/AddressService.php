<?php

declare(strict_types=1);

namespace PayEye\Lib\Service;

use PayEye\Lib\Model\Address;

class AddressService
{
    /** @var Address */
    private $address;

    /** @var string */
    private $firstLine;

    /** @var string */
    private $fullAddress;

    /**
     * @param \PayEye\Lib\Model\Address $address
     * @return AddressService
     */
    public static function create(Address $address): self
    {
        $object = new self();
        $object->address = $address;

        return $object;
    }

    public function build(): AddressService
    {
        $this->firstLine = $this->address->getStreet() ?? $this->address->getCity();

        if ($this->address->getBuildingNumber()) {
            $this->firstLine .= ' '.$this->address->getBuildingNumber();

            if ($this->address->getFlatNumber()) {
                $this->firstLine .= '/'.$this->address->getFlatNumber();
            }
        } elseif ($this->address->getFlatNumber()) {
            $this->firstLine .= ' '.$this->address->getFlatNumber();
        }

        $this->fullAddress = $this->firstLine.', '.$this->address->getPostCode().' '.$this->address->getCity().', '.$this->address->getCountry();

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @param \PayEye\Lib\Model\Address $address
     */
    public function setAddress(Address $address): AddressService
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstLine(): string
    {
        return $this->firstLine;
    }

    /**
     * @param string $firstLine
     * @return AddressService
     */
    public function setFirstLine(string $firstLine): AddressService
    {
        $this->firstLine = $firstLine;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress
     * @return AddressService
     */
    public function setFullAddress(string $fullAddress): AddressService
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }
}
