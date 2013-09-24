<?php

namespace Oop\ShopProduct;

abstract class ShopProductAbstract
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $qty = 0;

    /**
     * @var float
     */
    private $price;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    abstract public function getBrandName();

    abstract public function getSupplier();
}
