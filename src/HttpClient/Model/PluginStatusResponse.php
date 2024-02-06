<?php

declare(strict_types=1);

namespace PayEye\Lib\HttpClient\Model;

use PayEye\Lib\Tool\Builder;

class PluginStatusResponse
{
    use Builder;

    public static function createFromArray(?array $getArrayResponse):self
    {
        return self::builder();
    }
}
