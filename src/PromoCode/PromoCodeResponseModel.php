<?php

declare(strict_types=1);

namespace PayEye\Lib\PromoCode;

use PayEye\Lib\Tool\Builder;

class PromoCodeResponseModel
{
    use Builder;

    /** @var string */
    public $status = 'OK';

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

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
