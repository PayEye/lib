<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Billing
{
    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $phoneNumber;

    /** @var string */
    private $email;

    /** @var Address */
    private $address;

    public function __construct(array $context)
    {
        $this->firstName = $context['firstName'];
        $this->lastName = $context['lastName'];
        $this->phoneNumber = $context['phoneNumber'];
        $this->email = $context['email'];
        $this->address = new Address($context['address']);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
