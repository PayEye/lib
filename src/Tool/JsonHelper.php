<?php

namespace PayEye\Lib\Tool;

use RuntimeException;

class JsonHelper
{
    public static function jsonEncode(array $data): string
    {
        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
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
