<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Infrastructure;

use PayEye\Lib\Enum\HttpStatus;
use PayEye\Lib\HttpClient\Exception\HttpException;
use PayEye\Lib\HttpClient\Exception\HttpNetworkException;
use PayEye\Lib\HttpClient\Model\HttpResponse;
use PayEye\Lib\Tool\JsonHelper;

class HttpClient
{
    /**
     * @param string $url
     * @param $data
     * @return \PayEye\Lib\HttpClient\Model\HttpResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
     */
    public static function post(string $url, $data): HttpResponse
    {
        return self::request('POST', $url, $data);
    }

    /**
     * @param string $url
     * @return \PayEye\Lib\HttpClient\Model\HttpResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
     */
    public static function get(string $url): HttpResponse
    {
        return self::request('GET', $url);
    }

    /**
     * @param string $requestType
     * @param string $url
     * @param $data
     * @return \PayEye\Lib\HttpClient\Model\HttpResponse
     * @throws \PayEye\Lib\HttpClient\Exception\HttpException
     * @throws \PayEye\Lib\HttpClient\Exception\HttpNetworkException
     */
    public static function request(string $requestType, string $url, $data = null): HttpResponse
    {
        $curl = curl_init($url);

        $options = [
            CURLOPT_CUSTOMREQUEST => $requestType,
            CURLOPT_ENCODING => 'gzip',
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HEADER => false,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTPHEADER => [
                'X-API-VERSION: 1',
                'Content-Type:application/json',
            ],
        ];

        if ($data) {
            $options[CURLOPT_POSTFIELDS] = JsonHelper::jsonEncode($data);
        }

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($response === false) {
            throw new HttpNetworkException(curl_error($curl));
        }

        curl_close($curl);

        $response = HttpResponse::create($httpCode, trim($response));

        if ($response->getCode() !== HttpStatus::OK) {
            throw new HttpException($response->getResponse(), $response->getCode());
        }

        return $response;
    }
}
