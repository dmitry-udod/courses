<?php

namespace Oop\ShopProduct\Reports;

use Oop\ShopProduct\ShopProductAbstract;
use Oop\ShopProduct\ShopProductDataAbstract;

class ShopProductDataAsJson extends ShopProductDataAbstract
{

    /**
     * Get product data as string
     *
     * @param ShopProductAbstract $product
     */
    public function compose(ShopProductAbstract $product)
    {
        $this->setData(json_encode(ShopProductDataAsArray::getProductDataAsArray($product)));
    }

    /**
     * Print product data as JSON
     */
    public function displayData()
    {
        echo $this->getData();
    }
}
