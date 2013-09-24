<?php

namespace Oop\ShopProduct\Reports;

use Oop\ShopProduct\ShopProductAbstract;
use Oop\ShopProduct\ShopProductDataAbstract;

class ShopProductDataAsString extends ShopProductDataAbstract
{

    /**
     * Get product data as string
     *
     * @param ShopProductAbstract $product
     */
    public function compose(ShopProductAbstract $product)
    {
        $this->setData(
            'Product name: ' . $product->getName() . '<br>' .
            'Product supplier: ' . $product->getSupplier() . '<br>'.
            'Product brand: ' . $product->getBrandName() . '<br>'.
            'Width: ' . $product->getHeight() . '<br>'.
            'Height: ' . $product->getWidth() . '<br>' .
            '<hr>'
        );
    }

    public function displayData()
    {
        echo $this->getData();
    }
}