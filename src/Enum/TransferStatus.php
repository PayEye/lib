<?php

namespace PayEye\Lib\Enum;

abstract class TransferStatus
{
    public const SUCCESS = 'SUCCESS';
    public const IN_PROGRESS = 'IN_PROGRESS';
    public const REJECTED = 'REJECTED';
}
