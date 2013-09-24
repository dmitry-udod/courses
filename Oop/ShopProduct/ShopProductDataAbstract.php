<?php

namespace Oop\ShopProduct;

abstract class ShopProductDataAbstract implements ShopProductDataInterface
{
    public $data;

    abstract public function compose(ShopProductAbstract $product);

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}