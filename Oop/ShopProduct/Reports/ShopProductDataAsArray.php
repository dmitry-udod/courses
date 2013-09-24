<?php

namespace Oop\ShopProduct\Reports;

use Oop\ShopProduct\ShopProductAbstract;
use Oop\ShopProduct\ShopProductDataAbstract;

class ShopProductDataAsArray extends ShopProductDataAbstract
{

    /**
     * Set product data
     *
     * @param ShopProductAbstract $product
     */
    public function compose(ShopProductAbstract $product)
    {
        $this->setData(self::getProductDataAsArray($product));
    }

    /**
     * Get product data as array
     *
     * @param  ShopProductAbstract $product
     * @return array
     */
    public static function getProductDataAsArray(ShopProductAbstract $product)
    {
        return array(
            'name'      => $product->getName(),
            'brand'     => $product->getBrandName(),
            'supplier'  => $product->getSupplier(),
            'width'     => $product->getWidth(),
            'height'    => $product->getHeight(),
        );
    }

    public function displayData()
    {
        var_dump($this->getData());
    }
}
