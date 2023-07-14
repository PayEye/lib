<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient;

use PayEye\Lib\Env\Config;
use PayEye\Lib\Auth\AuthService;
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

    /**
     * @param \PayEye\Lib\Env\Config $config
     * @return PayEyeHttpClient
     */
    public static function create(Config $config): self
    {
        $object = new self();
        $object->baseUrl = $config->getUrl();

        return $object;
    }

    /**
     * @param \PayEye\Lib\HttpClient\Model\RefreshCartRequest $data
     * @param \PayEye\Lib\Auth\AuthService $authService
     * @return \PayEye\Lib\HttpClient\Model\RefreshCartResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
     */
    public function refreshCart(RefreshCartRequest $data, AuthService $authService): RefreshCartResponse
    {
        $response = $this->post('/plugin/event', $data->toArray(), $authService);

        return RefreshCartResponse::createFromArray($response->getArrayResponse());
    }

    /**
     * @param \PayEye\Lib\HttpClient\Model\ReturnStatusRequest $data
     * @param \PayEye\Lib\Auth\AuthService $authService
     * @return \PayEye\Lib\HttpClient\Model\ReturnStatusResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
     */
    public function returnStatus(ReturnStatusRequest $data, AuthService $authService): ReturnStatusResponse
    {
        $response = $this->post('/plugin/returns', $data->toArray(), $authService);

        return ReturnStatusResponse::createFromArray($response->getArrayResponse());
    }

    /**
     * @param string $pathUrl
     * @param array $data
     * @param \PayEye\Lib\Auth\AuthService $authService
     * @return \PayEye\Lib\HttpClient\Model\HttpResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
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

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return PayEyeHttpClient
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }
}
