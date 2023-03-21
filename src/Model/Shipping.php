<?php

declare(strict_types=1);

namespace PayEye\Lib\Model;

class Shipping
{
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

    public function __construct(array $context)
    {
        $this->firstName = $context['firstName'];
        $this->lastName = $context['lastName'];
        $this->label = $context['label'];
        $this->address = new Address($context['address']);

        $pickupPoint = $context['pickupPoint'] ?? null;
        if ($pickupPoint) {
            $this->pickupPoint = PickupPoint::createFromArray($context['pickupPoint']);
        }
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getPickupPoint(): ?PickupPoint
    {
        return $this->pickupPoint;
    }
}
