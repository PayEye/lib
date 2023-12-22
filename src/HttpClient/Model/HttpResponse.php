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

    /**
     * @param int $code
     * @param string $response
     * @return HttpResponse
     */
    public static function create(int $code, string $response): self
    {
        $object = new self();

        $object->code = $code;
        $object->response = $response;

        return $object;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function getArrayResponse(): array
    {
        return JsonHelper::jsonDecode($this->getResponse(), true);
    }

    /**
     * @param int $code
     * @return HttpResponse
     */
    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param string $response
     * @return HttpResponse
     */
    public function setResponse(string $response): self
    {
        $this->response = $response;

        return $this;
    }
}
