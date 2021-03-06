<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/28/2018
 * Time: 12:13 PM
 */
namespace  ProductDecorator;
require_once ("Product.php");

use Product\Product;

class ProductDecorator{

    protected $product;
    protected $price;

    public function __construct(Product $product) {
        $this -> product = $product;
        $this -> resetPrice();
    }

    function resetPrice() {
        $this -> price = $this -> product -> getPrice();
    }
    function showRozdribnaPrice() {
        return $this -> price;
    }

    function showOptovaPrice(){
        return $this -> price * 0.9;
    }
}