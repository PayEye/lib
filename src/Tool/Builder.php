<?php

namespace PayEye\Lib\Tool;

trait Builder
{
    public static function builder(): self
    {
        return new self();
    }

    public function toArray(): array
    {
        return (array)$this;
    }
}
