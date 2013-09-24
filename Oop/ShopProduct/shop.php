<?php
require_once 'ShopProductAbstract.php';
require_once 'ShopProductDataInterface.php';
require_once 'ShopProductDataAbstract.php';
require_once 'Appliances/AppliancesProductAbstract.php';
require_once 'Reports/ShopProductDataAsString.php';
require_once 'Reports/ShopProductDataAsArray.php';
require_once 'Reports/ShopProductDataAsJson.php';
require_once 'Appliances/Frig.php';
require_once 'Appliances/Microwave.php';

use Oop\ShopProduct\Appliances\Frig;
use Oop\ShopProduct\Appliances\Microwave;
use Oop\ShopProduct\Reports\ShopProductDataAsString;
use Oop\ShopProduct\Reports\ShopProductDataAsArray;
use Oop\ShopProduct\Reports\ShopProductDataAsJson;

$report = new ShopProductDataAsString();
$frig = new Frig();
$report->compose($frig);
$report->displayData();

$report = new ShopProductDataAsArray();
$micro = new Microwave();
$report->compose($micro);
$report->displayData();

$report = new ShopProductDataAsJson();
$report->compose($frig);
$report->displayData();
