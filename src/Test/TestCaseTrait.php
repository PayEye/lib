<?php

declare(strict_types=1);

namespace PayEye\Lib\Test;

use PayEye\Lib\Auth\AuthConfig;
use PayEye\Lib\Auth\AuthRequest;
use PayEye\Lib\Auth\AuthService;
use PayEye\Lib\Auth\HashService;
use PayEye\Lib\Exception\PayEyePaymentException;
use PayEye\Lib\HttpClient\Exception\HttpException;
use PayEye\Lib\HttpClient\Infrastructure\HttpClient;
use PayEye\Lib\HttpClient\Model\ErrorResponse;
use PayEye\Lib\HttpClient\Model\HttpResponse;

trait TestCaseTrait
{
    /** @var HttpResponse */
    protected $response;

    protected function assertPayEyeException(PayEyePaymentException $exception): void
    {
        $this->assertStatusCode($exception->getStatusCode());
        $this->assertEquals(
            $exception->getErrorCode(),
            ErrorResponse::createFromArray($this->response->getArrayResponse())->getErrorCode(),
            'AssertPayEyeException: Invalid error code'
        );
    }

    protected function assertStatusCode(int $code): void
    {
        $this->assertEquals($code, $this->response->getCode(), 'Invalid status code');
    }

    protected function delete(string $url, array $payload): void
    {
        $this->response = $this->request('DELETE', $url, $payload);
    }

    protected function post(string $url, array $payload): void
    {
        $this->response = $this->request('POST', $url, $payload);
    }

    protected function put(string $url, array $payload): void
    {
        $this->response = $this->request('PUT', $url, $payload);
    }

    protected function request(string $method, string $url, array $data): HttpResponse
    {
        try {
            return HttpClient::request($method, $url, $data);
        } catch (HttpException $e) {
            return new HttpResponse($e->getCode(), $e->getMessage());
        }
    }

    protected function addSignature(AuthConfig $authConfig): array
    {
        $payload = [];
        $authService = AuthService::create(HashService::create($authConfig), $payload, $payload);

        return (AuthRequest::create($payload, $authService->getSignature()))->toArray();
    }
}
