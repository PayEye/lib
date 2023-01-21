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

    public function __construct(string $cartId, string $shopIdentifier, string $eventType)
    {
        $this->cartId = $cartId;
        $this->shopIdentifier = $shopIdentifier;
        $this->eventType = $eventType;
    }

    public function toArray(): array
    {
        return [
            'cartId' => $this->cartId,
            'shopIdentifier' => $this->shopIdentifier,
            'eventType' => $this->eventType,
        ];
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getShopIdentifier(): string
    {
        return $this->shopIdentifier;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }
}
