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

    /**
     * @param string $deepLink
     * @return WidgetModel
     */
    public function setDeepLink(string $deepLink): self
    {
        $this->deepLink = $deepLink;

        return $this;
    }

    /**
     * @param \PayEye\Lib\Widget\Model\WidgetCartModel $cart
     * @return WidgetModel
     */
    public function setCart(WidgetCartModel $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeepLink(): string
    {
        return $this->deepLink;
    }

    /**
     * @return \PayEye\Lib\Widget\Model\WidgetCartModel
     */
    public function getCart(): WidgetCartModel
    {
        return $this->cart;
    }
}
