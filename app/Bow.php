<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/28/2018
 * Time: 11:31 AM
 */
namespace Bow;
//require_once ("ProductDecorator.php.php");
use ProductDecorator\ProductDecorator;

class Bow extends ProductDecorator
{
    private $btd;
    public function __construct(ProductDecorator $btd_in) {
        $this->btd = $btd_in;
    }
    function exclaimPrice() {
        $this->btd->price = "15";
    }
}