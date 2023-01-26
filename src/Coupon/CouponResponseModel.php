<?php

declare(strict_types=1);

namespace PayEye\Lib\Coupon;

use PayEye\Lib\Tool\Builder;

class CouponResponseModel
{
    use Builder;

    /** @var string */
    public $status;

    /** @var string[] */
    public $signatureFrom;

    /**
     * @param string[] $signatureFrom
     */
    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;
        return $this;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
