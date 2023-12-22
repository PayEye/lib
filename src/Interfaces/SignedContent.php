<?php

namespace PayEye\Lib\Interfaces;

interface SignedContent
{
    /**
     * @return string[]
     */
    public function getSignatureFrom(): array;

    /**
     * @return string
     */
    public function getSignature(): string;

    /**
     * @param string $signature
     * @return mixed;
     */
    public function setSignature(string $signature);

    /**
     * @param array $signatureFrom
     * @return mixed;
     */
    public function setSignatureFrom(array $signatureFrom);
}
