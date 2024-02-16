<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Invoice
{
    use Builder;

    /** @var string */
    private $vatId;

    /** @var string */
    private $company;

    /** @var Address */
    private $address;

    /**
     * @param array $context
     * @return Invoice
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->vatId = $context['vatId'];
        $object->company = $context['company'];
        $object->address = Address::createFromArray($context['address']);

        return $object;
    }

    /**
     * @deprecated
     * @fixme
     * @return string
     */
    public function getId(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->vatId;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @deprecated
     * @fixme
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->company;
    }

    /**
     * @return \PayEye\Lib\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @deprecated
     * @fixme
     * @return bool
     */
    public function getDefaultInvoiceDetails(): bool
    {
        return false;
    }

    /**
     * @deprecated
     * @fixme
     * @param string $vatId
     * @return Invoice
     */
    public function setId(string $id): self
    {
        return $this;
    }

    /**
     * @param string $vatId
     * @return Invoice
     */
    public function setVatId(string $vatId): self
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @deprecated
     * @fixme
     * @param string $vatId
     * @return Invoice
     */
    public function setTaxId(string $vatId): self
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @param string $company
     * @return Invoice
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @deprecated
     * @fixme
     * @param string $company
     * @return Invoice
     */
    public function setCompanyName(string $company): self
    {
        $this->company = $company;

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

    /**
     * @deprecated
     * @fixme
     * @param bool $defaultInvoiceDetails
     * @return Invoice
     */
    public function setDefaultInvoiceDetails(bool $defaultInvoiceDetails): self
    {
        return $this;
    }
}
