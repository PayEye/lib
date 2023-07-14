<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

use PayEye\Lib\Tool\Builder;

class Shipping
{
    use Builder;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $label;

    /** @var Address */
    private $address;

    /** @var null|PickupPoint */
    private $pickupPoint;

    /**
     * @param array $context
     * @return Shipping
     */
    public static function createFromArray(array $context): self
    {
        $object = self::builder();

        $object->firstName = $context['firstName'];
        $object->lastName = $context['lastName'];
        $object->label = $context['label'];
        $object->address = Address::createFromArray($context['address']);

        $pickupPoint = $context['pickupPoint'] ?? null;
        if ($pickupPoint) {
            $object->pickupPoint = PickupPoint::createFromArray($context['pickupPoint']);
        }

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
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return \PayEye\Lib\Model\Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return \PayEye\Lib\Model\PickupPoint|null
     */
    public function getPickupPoint(): ?PickupPoint
    {
        return $this->pickupPoint;
    }

    /**
     * @param string $firstName
     * @return Shipping
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     * @return Shipping
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $label
     * @return Shipping
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\Address $address
     * @return Shipping
     */
    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Model\PickupPoint|null $pickupPoint
     * @return Shipping
     */
    public function setPickupPoint(?PickupPoint $pickupPoint): self
    {
        $this->pickupPoint = $pickupPoint;

        return $this;
    }
}
