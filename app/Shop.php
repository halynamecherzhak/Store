<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/23/2018
 * Time: 12:56 AM
 */

namespace Shop;

class Shop
{
    public $amount;
    public $discount;
    public $total;

    public function __construct($amount)
    {
        $this->amount=$amount;
    }
    public function __set($amount,$discount)
    {

        if ($amount < 1) {
            throw new Exception("Invalid number of flowers");
        }
        else
        {
            $this->amount=$amount;
            $this->discount=$discount;
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

    /*public function showAvailableProducts()
    {
        return "Name: ".getType()." Price".getPrice()."UAH"." Category: ".getCategory();
    }
*/
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
            $this->discount=0.5;
            $this->totalPrice()*0.5;
        }
        else
        {
            echo "Price isn't enough to get the discount!";
        }
    }
}
