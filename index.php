<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/20/2018
 * Time: 11:30 PM
 */

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Product.php';
require __DIR__.'/app/Characteristic.php';
require __DIR__.'/app/Customer.php';
require __DIR__.'/app/Order.php';
require __DIR__.'/app/ProductDecorator.php';
require __DIR__.'/app/Shop.php';
require __DIR__.'/app/ShopItem.php';
require __DIR__.'/Payment/CreditCardPayment.php';
require __DIR__.'/Delivery/NewPost.php';

use Characteristic\Characteristic;
use Product\Product;
use Customer\Customer;
use Order\Order;
use ProductDecorator\ProductDecorator;
use Shop\Shop;
use ShopItem\ShopItem;
use Payment\CreditCardPayment;
use Delivery\NewPost;


//create customer

$customer = new Customer(
    "Halyna",
    "galya.mech@gmail.com",
    "Doroshenka, 35");

$payment = new CreditCardPayment();

$deliveryType = new NewPost();
$deliveryCost = new NewPost();

//create product

$prod = new Product(
    "rose",
    20,
    "plant");

//create Shop which consists of ShopName,Products,Characteristic,ShopAddress

$myShop = new Shop("GalinaShop", array(
   new ShopItem($prod,
       5,
       new Characteristic(
           array("Manufacture country: Ukraine",
                 "Type: flower"))),
   new ShopItem(
       new Product("tea", 50, "drink"),
       10,
       new Characteristic(
           array("Manufacture country: India",
                 "Type: drink"))
)),"Doroshenka 35");

echo "<h2>MyShop available products: </h2>"."<br>";
foreach ($myShop -> getProductArray() as $shopItem) {
    echo $shopItem -> getProduct() -> getType()."<br>";
    //echo $shopItem -> getProduct() -> getPrice() * $shopItem -> getAmount()."<br>";
    echo $shopItem -> getProduct() -> getPrice()."<br>";
    echo $shopItem -> getAmount()."<br>";
    echo $shopItem ->  getCharacteristic() -> getCharacteristicArray()."<br>";
}

//create Order

$order = new Order(
    date("Y-m-d"),
    array($myShop -> getProductArray()[1] -> getProduct()),
    $payment,
    $deliveryType,
    $deliveryCost,
    $customer,
    $myShop->getShopName()
    );

echo "<h2>Order Information:</h2>";

echo $order -> getShopName()."<br>";
foreach ($order -> getProducts() as $product) {
    echo $product -> getType()."<br>";
    echo $product ->getPrice()."<br>";
}

echo $order -> getCustomer() -> getName()."<br>".
     $order -> getCustomer() -> getAddress()."<br>".
     $order -> getCustomer() -> getEmail()."<br>".

     $order -> getDeliveryType() -> getPostName()."<br>".
     $order -> getDeliveryCost() -> getCost()."<br>".
     $order -> getOrderDate()."<br>";

echo "<h2>TotalPayment</h2>";
echo $order -> getDeliveryCost() -> getCost() + $shopItem -> getProduct() -> getPrice();


echo "<h2>Decorator</h2>";
$flower = new Product(
    'tulip',
    20,
    'plant');

$decorator = new ProductDecorator($flower);

echo'Showing Rozdribna price of products : ';
echo $decorator->showRozdribnaPrice()."<br>";

echo'Showing Optova price of products : ';
echo $decorator->showOptovaPrice()."<br>";



