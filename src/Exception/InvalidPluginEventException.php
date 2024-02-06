<?php

namespace PayEye\Lib\Exception;

use Exception;

class InvalidPluginEventException extends Exception
{
    protected $message = 'Invalid plugin event';
}
