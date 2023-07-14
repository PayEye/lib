<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Invoice
{
    use Builder;

    /** @var string */
    private $nip;

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

        $object->nip = $context['nip'];
        $object->company = $context['company'];
        $object->address = Address::createFromArray($context);

        return $object;
    }

    /**
     * @return string
     */
    public function getNip(): string
    {
        return $this->nip;
    }

    /**
     * @return string
     */
    public function getCompany(): string
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
     * @param string $nip
     * @return Invoice
     */
    public function setNip(string $nip): self
    {
        $this->nip = $nip;

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
     * @param \PayEye\Lib\Model\Address $address
     * @return Invoice
     */
    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }
}
