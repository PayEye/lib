<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class PersonalData
{
    /** @var string */
    private $firstname;

    /** @var string */
    private $lastname;

    /** @var string */
    private $phoneNumber;

    /** @var string */
    private $email;

    /** @var Address */
    private $address;

    public function __construct(array $context)
    {
        $this->firstname = $context['firstname'];
        $this->lastname = $context['lastname'];
        $this->phoneNumber = $context['phoneNumber'];
        $this->email = $context['email'];
        $this->address = new Address($context);
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
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
