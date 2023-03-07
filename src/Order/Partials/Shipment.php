<?php

declare(strict_types=1);

namespace PayEye\Lib\Order\Partials;

use PayEye\Lib\Model\Address;

class Shipment
{
    /** @var string */
    private $firstname;

    /** @var string */
    private $lastname;

    /** @var Address */
    private $address;

    /** @var PickupPoint */
    private $pickupPoint;

    public function __construct(array $context)
    {
        $this->firstname = $context['firstname'];
        $this->lastname = $context['lastname'];
        $this->address = new Address($context);
        $this->pickupPoint = new PickupPoint($context['pickupPoint']);
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getPickupPoint(): PickupPoint
    {
        return $this->pickupPoint;
    }
}
