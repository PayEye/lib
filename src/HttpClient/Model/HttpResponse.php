<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

use PayEye\Lib\Tool\JsonHelper;

class HttpResponse
{
    /** @var int */
    private $code;

    /** @var string */
    private $response;

    public function __construct(int $code, string $response)
    {
        $this->code = $code;
        $this->response = $response;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getResponse(): string
    {
        return $this->response;
    }

    public function getArrayResponse(): array
    {
        return JsonHelper::jsonDecode($this->getResponse(), true);
    }
}
