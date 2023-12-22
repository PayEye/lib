<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Billing
{
    use Builder;

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

    public static function createFromArray(array $context): Billing
    {
        $object = self::builder();

        $object->firstName = $context['firstName'];
        $object->lastName = $context['lastName'];
        $object->phoneNumber = $context['phoneNumber'];
        $object->email = $context['email'];
        $object->address = Address::createFromArray($context['address']);

        return $object;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return \PayEye\Lib\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param string $firstName
     * @return Billing
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     * @return Billing
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $phoneNumber
     * @return Billing
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @param string $email
     * @return Billing
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Address $address
     * @return Billing
     */
    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }
}
