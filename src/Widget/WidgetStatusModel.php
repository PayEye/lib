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

    /** @var ?string */
    public $checkoutUrl;

    /**
     * @param string|null $checkoutUrl
     * @return WidgetStatusModel
     */
    public function setCheckoutUrl(?string $checkoutUrl): self
    {
        $this->checkoutUrl = $checkoutUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCheckoutUrl(): ?string
    {
        return $this->checkoutUrl;
    }

    /**
     * @param string|null $status
     * @return WidgetStatusModel
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param bool|null $open
     * @return WidgetStatusModel
     */
    public function setOpen(?bool $open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return bool|null
     */
    public function getOpen(): ?bool
    {
        return $this->open;
    }
}
