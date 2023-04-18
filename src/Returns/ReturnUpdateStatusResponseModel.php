<?php

declare(strict_types=1);

namespace PayEye\Lib\Returns;

use PayEye\Lib\Enum\SignatureFrom;
use PayEye\Lib\Tool\Builder;

class ReturnUpdateStatusResponseModel
{
    use Builder;

    /** @var string */
    public $status = 'OK';

    /** @var array */
    public $signatureFrom = SignatureFrom::UPDATE_STATUS_RETURN_RESPONSE;

    public static function createFromArray(array $context): self
    {
        return self::builder()
            ->setStatus($context['status']);
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setSignatureFrom(array $signatureFrom): self
    {
        $this->signatureFrom = $signatureFrom;

        return $this;
    }
}
