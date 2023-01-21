<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Infrastructure;

use PayEye\Lib\Enum\HttpStatus;
use PayEye\Lib\HttpClient\Exception\HttpException;
use PayEye\Lib\HttpClient\Exception\HttpNetworkException;
use PayEye\Lib\HttpClient\Model\HttpResponse;

class HttpClient
{
    /**
     * @throws HttpException
     */
    public static function post(string $url, $data): HttpResponse
    {
        return self::request('POST', $url, $data);
    }

    /**
     * @throws HttpException
     */
    public static function get(string $url): HttpResponse
    {
        return self::request('GET', $url);
    }

    /**
     * @throws HttpException
     */
    private static function request(string $requestType, string $url, $data = null): HttpResponse
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
            $options[CURLOPT_POSTFIELDS] = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($response === false) {
            throw new HttpNetworkException(curl_error($curl));
        }

        curl_close($curl);

        $response = new HttpResponse($httpCode, trim($response));

        if ($response->getCode() !== HttpStatus::OK) {
            throw new HttpException($response->getResponse(), $response->getCode());
        }

        return $response;
    }
}
