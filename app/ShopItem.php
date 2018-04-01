<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/1/2018
 * Time: 3:45 PM
 */

namespace ShopItem;

use Product\Product;
use Characteristic\Characteristic;

class ShopItem
{
    public $product;
    public $amount;
    public $productCharacteristic;

    public function __construct($product, $amount, $characteristic)
    {
        $this -> product = $product;
        $this -> amount = $amount;
        $this -> productCharacteristic = $characteristic;
    }

    public function getAmount()
    {
        return $this -> amount;
    }

    public  function getProduct()
    {
        return $this -> product;
    }

    /**
     * @return mixed
     */
    public function getCharacteristic()
    {
        return $this -> productCharacteristic;
    }
}