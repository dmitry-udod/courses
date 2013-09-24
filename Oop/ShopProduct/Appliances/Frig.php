<?php

namespace Oop\ShopProduct\Appliances;

use Oop\ShopProduct\Appliances\AppliancesProductAbstract;

class Frig extends AppliancesProductAbstract
{
    /**
     * @var int
     */
    protected $height = 100;

    /**
     * @var int
     */
    protected $width = 100;

    /**
     * Get product name
     *
     * @return string
     */
    public function getName()
    {
        return 'Frig';
    }

    /**
     * Get brand data
     *
     * @return string
     */
    public function getBrandName()
    {
        return parent::getBrandName() . ' Electronics';
    }
}