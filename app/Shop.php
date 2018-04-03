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
    private $shopAddress;

    private  $totlPrice;

    public function __construct($shopName, $productArray, $shopAddress)
    {
        $this -> shopName = $shopName;
        $this -> productArray = $productArray;
        $this -> shopAddress = $shopAddress;
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

    /**
     * @return mixed
     */
    public function getShopAddress()
    {
        return $this->shopAddress;
    }



}
