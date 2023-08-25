<?php

namespace PayEye\Lib\Tool;

use RuntimeException;

class JsonHelper
{
    private const SERIALIZE_PRECISION_KEY = 'serialize_precision';

    public static function jsonEncode(array $data): string
    {
        $serializePrecisionValue = ini_get(self::SERIALIZE_PRECISION_KEY);
        ini_set(self::SERIALIZE_PRECISION_KEY, -1);

        $jsonString = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        ini_set(self::SERIALIZE_PRECISION_KEY, $serializePrecisionValue);
        return $jsonString;
    }

    public static function jsonDecode($json): array
    {
        return json_decode($json, true);
    }

    public static function getArrayFromJsonFile(string $jsonPath): array
    {
        if (!file_exists($jsonPath)) {
            throw new RuntimeException($jsonPath.' not exists.');
        }

        $content = file_get_contents($jsonPath);

        return json_decode($content, true);
    }
}
