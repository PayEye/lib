<?php

declare(strict_types=1);

namespace PayEye\Lib\PromoCode;

use PayEye\Lib\Interfaces\SignedContent;
use PayEye\Lib\Tool\Builder;

class PromoCodeRequestModel implements SignedContent
{
    use Builder;

    /** @var string */
    public $cartId;

    /** @var string */
    public $promoCode;

    /** @var string */
    private $signature;

    /** @var string[] */
    private $signatureFrom = ['cartId', 'promoCode'];

    /**
     * @param array $context
     * @return PromoCodeRequestModel
     */
    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setCartId($context['cartId'])
            ->setPromoCode($context['promoCode'])
            ->setSignatureFrom($context['signatureFrom'])
            ->setSignature($context['signature']);
    }

    /**
     * @param string $cartId
     * @return PromoCodeRequestModel
     */
    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param string $promoCode
     * @return PromoCodeRequestModel
     */
    public function setPromoCode(string $promoCode): self
    {
        $this->promoCode = $promoCode;

        return $this;
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
    public function getPromoCode(): string
    {
        return $this->promoCode;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return PromoCodeRequestModel
     */
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSignatureFrom(): array
    {
        return $this->signatureFrom;
    }

    /**
     * @param string[] $signatureFrom
     * @return PromoCodeRequestModel
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
