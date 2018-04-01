<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/23/2018
 * Time: 12:56 AM
 */

namespace Shop;

use ShopItem\ShopItem;
use Product\Product;

class Shop
{
    private $shopName;
    private $productArray;

    public function __construct($shopName, $productArray)
    {
        $this -> shopName = $shopName;
        $this -> productArray = $productArray;
    }

    /**
     * @return mixed
     */
    public function getProductArray()
    {
        return $this->productArray;
    }

    /**
     * @return mixed
     */
    public function getShopName()
    {
        return $this->shopName;
    }

/*    public function __set($amount)
    {

        if ($amount < 1) {
            throw new Exception("Invalid number of flowers");
        }
        else
        {
            $this -> productArray -> amount=$amount;
        }
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function showAvailableProducts()
    {
        return "Name: ".getType()." Price".getPrice()."UAH"." Category: ".getCategory();
    }

    public function countPrice()
    {
        $total = $this->amount * getPrice();
        echo "The full price  of is : ";
        return $total;
    }

    public function countDiscount()
    {
        if($this->getPrice()>300)
        {
            $discount = 0.5;
            $this->totalPrice() * $discount;
        }
        else
        {
            echo "Price isn't enough to get the discount!";
        }
    }*/
}
