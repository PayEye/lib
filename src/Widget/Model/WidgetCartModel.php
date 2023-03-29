<?php

declare(strict_types=1);

namespace PayEye\Lib\Widget\Model;

use PayEye\Lib\Tool\Builder;

class WidgetCartModel
{
    use Builder;

    /** @var string */
    public $id;

    /** @var boolean */
    public $open;

    /** @var string */
    public $price;

    /** @var string */
    public $regularPrice;

    /** @var string */
    public $qr;

    /** @var int */
    public $count;

    /** @var string */
    public $url;

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setOpen(bool $open): self
    {
        $this->open = $open;

        return $this;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function setRegularPrice(string $regularPrice): self
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }

    public function setQr(string $qr): self
    {
        $this->qr = $qr;

        return $this;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
