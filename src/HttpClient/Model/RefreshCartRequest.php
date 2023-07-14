<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

class RefreshCartRequest
{
    /** @var string */
    private $cartId;

    /** @var string */
    private $shopIdentifier;

    /** @var string */
    private $eventType;

    /**
     * @param string $cartId
     * @param string $shopIdentifier
     * @param string $eventType
     * @return RefreshCartRequest
     */
    public static function create(string $cartId, string $shopIdentifier, string $eventType): self
    {
        $object = new self();

        $object->cartId = $cartId;
        $object->shopIdentifier = $shopIdentifier;
        $object->eventType = $eventType;

        return $object;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'cartId' => $this->cartId,
            'shopIdentifier' => $this->shopIdentifier,
            'eventType' => $this->eventType,
        ];
    }

    /**
     * @return string
     */
    public function getCartId(): string
    {
        return $this->cartId;
    }

    /**
     * @return string
     */
    public function getShopIdentifier(): string
    {
        return $this->shopIdentifier;
    }

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * @param string $cartId
     * @return RefreshCartRequest
     */
    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param string $shopIdentifier
     * @return RefreshCartRequest
     */
    public function setShopIdentifier(string $shopIdentifier): self
    {
        $this->shopIdentifier = $shopIdentifier;

        return $this;
    }

    /**
     * @param string $eventType
     * @return RefreshCartRequest
     */
    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }
}
