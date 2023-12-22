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

    /**
     * @param string $id
     * @return WidgetCartModel
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param bool $open
     * @return WidgetCartModel
     */
    public function setOpen(bool $open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * @param string $price
     * @return WidgetCartModel
     */
    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string $regularPrice
     * @return WidgetCartModel
     */
    public function setRegularPrice(string $regularPrice): self
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }

    /**
     * @param string $qr
     * @return WidgetCartModel
     */
    public function setQr(string $qr): self
    {
        $this->qr = $qr;

        return $this;
    }

    /**
     * @param int $count
     * @return WidgetCartModel
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param string $url
     * @return WidgetCartModel
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getRegularPrice(): string
    {
        return $this->regularPrice;
    }

    /**
     * @return string
     */
    public function getQr(): string
    {
        return $this->qr;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
