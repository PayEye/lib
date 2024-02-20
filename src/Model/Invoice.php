<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Invoice
{
    use Builder;

    /** @var string */
    private $taxId;

    /** @var string */
    private $companyName;

    /** @var Address */
    private $address;

    /**
     * @param array $context
     * @return Invoice
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->taxId = $context['taxId'];
        $object->companyName = $context['companyName'];
        $object->address = Address::createFromArray($context['address']);

        return $object;
    }

    /**
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return \PayEye\Lib\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param string $taxId
     * @return Invoice
     */
    public function setTaxId(string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @param string $companyName
     * @return Invoice
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Address $address
     * @return Invoice
     */
    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }
}
