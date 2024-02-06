<?php

namespace PayEye\Lib\Enum;

class PluginModes
{
    const PLUGIN_MODE_INTEGRATION = "INTEGRATION";
    const PLUGIN_MODE_PRODUCTION = "PRODUCTION";
    const PLUGIN_MODE_DEFAULT = "INTEGRATION";
    static public function getAllModesValues(): array
    {
        return [
            "INTEGRATION",
            "PRODUCTION"
        ];
    }
}