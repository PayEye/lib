<?php

declare(strict_types=1);

namespace PayEye\Lib\Widget;

use PayEye\Lib\Tool\Builder;
use PayEye\Lib\Widget\Model\WidgetCartModel;

class WidgetModel
{
    use Builder;

    /** @var string */
    public $deepLink;

    /** @var WidgetCartModel */
    public $cart;

    public function setDeepLink(string $deepLink): self
    {
        $this->deepLink = $deepLink;
        return $this;
    }

    public function setCart(WidgetCartModel $cart): self
    {
        $this->cart = $cart;
        return $this;
    }
}
