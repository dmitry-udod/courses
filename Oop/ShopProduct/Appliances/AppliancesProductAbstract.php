<?php

namespace Oop\ShopProduct\Appliances;

use Oop\ShopProduct\ShopProductAbstract;

abstract class AppliancesProductAbstract extends  ShopProductAbstract
{
    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected  $height;

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get brand data
     *
     * @return string
     */
    public function getBrandName()
    {
        return 'Samsung';
    }

    /**
     * Get supplier data
     *
     * @return string
     */
    public function getSupplier()
    {
        return 'Supplier1';
    }
}