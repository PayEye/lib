<?php

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
        $this->assertEquals($exception->getStatusCode(), $this->response->getCode(), 'AssertPayEyeException: Invalid status code');
        $this->assertEquals(
            $exception->getErrorCode(),
            ErrorResponse::createFromArray($this->response->getArrayResponse())->getErrorCode(),
            'AssertPayEyeException: Invalid error code'
        );
    }

    protected function post(string $url, array $payload, AuthConfig $authConfig): void
    {
        $this->response = $this->request('POST', $url, $payload, $authConfig);
    }

    protected function request(string $method, string $url, array $data, AuthConfig $authConfig): HttpResponse
    {
        $content = array_merge($this->authData($authConfig), $data);

        try {
            return HttpClient::request($method, $url, $content);
        } catch (HttpException $e) {
            return new HttpResponse($e->getCode(), $e->getMessage());
        }
    }

    private function authData(AuthConfig $authConfig): array
    {
        $payload = [];
        $authService = new AuthService(new HashService($authConfig), $payload, $payload);

        return (new AuthRequest($payload, $authService->getSignature()))->toArray();
    }
}
