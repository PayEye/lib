<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Invoice
{
    /** @var string */
    private $nip;

    /** @var string */
    private $company;

    /** @var Address */
    private $address;

    public function __construct(array $context)
    {
        $this->nip = $context['nip'];
        $this->company = $context['company'];
        $this->address = new Address($context);
    }

    public function getNip(): string
    {
        return $this->nip;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
