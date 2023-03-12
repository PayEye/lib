<?php

namespace PayEye\Lib\Widget;

use PayEye\Lib\Tool\Builder;

class WidgetStatusModel
{
    use Builder;

    /** @var ?string */
    public $status;

    /** @var ?bool */
    public $open;

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setOpen(?bool $open): self
    {
        $this->open = $open;

        return $this;
    }
}
