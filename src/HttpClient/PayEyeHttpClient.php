<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient;

use PayEye\Lib\Env\Config;
use PayEye\Lib\Auth\AuthService;
use PayEye\Lib\HttpClient\Exception\HttpException;
use PayEye\Lib\HttpClient\Infrastructure\HttpClient;
use PayEye\Lib\HttpClient\Model\HttpResponse;
use PayEye\Lib\HttpClient\Model\RefreshCartRequest;
use PayEye\Lib\HttpClient\Model\RefreshCartResponse;
use PayEye\Lib\HttpClient\Model\ReturnStatusRequest;
use PayEye\Lib\HttpClient\Model\ReturnStatusResponse;

class PayEyeHttpClient
{
    /** @var string */
    private $baseUrl;

    public function __construct(Config $config)
    {
        $this->baseUrl = $config->getUrl();
    }

    /**
     * @throws HttpException
     */
    public function refreshCart(RefreshCartRequest $data, AuthService $authService): RefreshCartResponse
    {
        $response = $this->post('/plugin/event', $data->toArray(), $authService);

        return RefreshCartResponse::createFromArray($response->getArrayResponse());
    }

    /**
     * @throws HttpException
     */
    public function returnStatus(ReturnStatusRequest $data, AuthService $authService): ReturnStatusResponse
    {
        $response = $this->post('/plugin/returns', $data->toArray(), $authService);

        return ReturnStatusResponse::createFromArray($response->getArrayResponse());
    }

    /**
     * @throws HttpException
     */
    private function post(string $pathUrl, array $data, AuthService $authService): HttpResponse
    {
        $auth = [
            'signature' => $authService->getSignature(),
            'signatureFrom' => $authService->getSignatureFrom(),
        ];

        $payload = array_merge($data, $auth);

        return HttpClient::post($this->baseUrl.$pathUrl, $payload);
    }
}
