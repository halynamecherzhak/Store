<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/28/2018
 * Time: 12:13 PM
 */
namespace  ProductDecorator;
require_once ("Product.php");

class ProductDecorator{

    protected $product;
    protected $price;

    public function __construct(Product $product) {
        $this->product = $product;
        $this->resetPrice();
    }
    //doing this so original object is not altered
    function resetPrice() {
        $this->price = $this->product->getPrice();
    }
    function showPrice() {
        return $this->price;
    }

}