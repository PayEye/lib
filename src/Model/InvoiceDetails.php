<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class InvoiceDetails
{
    use Builder;

    /** @var string */
    private $id;

    /** @var string */
    private $taxId;

    /** @var string */
    private $companyName;

    /** @var InvoiceAddress */
    private $address;

    /** @var bool */
    private $defaultInvoiceDetails;

    /**
     * @param array $context
     * @return InvoiceDetails
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->id = $context['id'];
        $object->taxId = $context['taxId'];
        $object->companyName = $context['companyName'];
        $object->address = InvoiceAddress::createFromArray($context['address']);
        $object->defaultInvoiceDetails = $context['defaultInvoiceDetails'];

        return $object;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
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
     * @return \PayEye\Lib\Model\InvoiceAddress
     */
    public function getAddress(): InvoiceAddress
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function getDefaultInvoiceDetails(): bool
    {
        return $this->defaultInvoiceDetails;
    }

    /**
     * @param string $id
     * @return InvoiceDetails
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $taxId
     * @return InvoiceDetails
     */
    public function setTaxId(string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @param string $companyName
     * @return InvoiceDetails
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\InvoiceAddress $address
     * @return InvoiceDetails
     */
    public function setAddress(InvoiceAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param bool $defaultInvoiceDetails
     * @return InvoiceDetails
     */
    public function setDefaultInvoiceDetails(bool $defaultInvoiceDetails): self
    {
        $this->defaultInvoiceDetails = $defaultInvoiceDetails;

        return $this;
    }
}
