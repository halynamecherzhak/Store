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
require __DIR__.'/app/Delivery.php';
require __DIR__.'/app/Order.php';
require __DIR__.'/app/Payment.php';
require __DIR__.'/app/ProductDecorator.php';
require __DIR__.'/app/Bow.php';
require __DIR__.'/app/Shop.php';
require __DIR__.'/app/ShopItem.php';

use Characteristic\Characteristic;
use Product\Product;
use Customer\Customer;
use Delivery\Delivery;
use Order\Order;
use Payment\Payment;
use Bow\Bow;
use ProductDecorator\ProductDecorator;
use Shop\Shop;
use ShopItem\ShopItem;


$flower = new Product(
    'tulip',
    15,
    'plant');
$flowerPot = new Product(
    'flowerpot',
    50,
    'plant');
$chocolate = new Product(
    'chocolate',
    30,
    'sweet');

$customer = new Customer(
    "Halyna",
    "galya.mech@gmail.com",
    "Medovoi Pechery, 39");
$delivery = new Delivery(
    "Lviv",
    "NewPost",
    50,
    "Courier");
$payment = new Payment("Cash");

//output available products
/*
echo "<h2>Available Goods: </h2>";
echo $flower->showAvailableProducts()."<br>";
echo $flowerPot->showAvailableProducts()."<br>";
echo $chocolate->showAvailableProducts();

//characteristic of available products
echo "<h2>Characteristic of Goods</h2>";
echo Characteristic::printCharacteristic();

//information about customer
echo"<h2>Customer Data</h2>";
//echo Customer::printCustomer();
echo "Name: ".$customer1->getName()."<br>"."E-mail: ".$customer1->getEmail()."<br>"."Address: ".$customer1->getAddress();

//delivery information
echo "<h2>Delivery Information</h2>";
echo "City: ".$deliver->getCity()."<br>"."Post_Type: ".$deliver->getPostType()."<br>"."Delivery_Cost: ".$deliver->getDeliveryCost();

echo"<h2>Order data</h2>";
//echo "Date: ".$order->getOrderDate()."<br>"."Goods: ".$order->getProducts()."<br>"."Payment: ".$order->getPayment()."<br>";

echo"Price";
echo $payment->totalPayment();
*/

$prod = new Product("rose",20,"plant");

$myShop = new Shop("PavloShop", array(
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
                 "Type; drink"))
)));

echo "MyShop Products: "."<br>";
foreach ($myShop -> getProductArray() as $shopItem) {
    echo $shopItem -> getProduct() -> getType();
    echo $shopItem -> getProduct() -> getPrice() * $shopItem -> getAmount()."<br>";
    echo $shopItem ->  getCharacteristic() -> getCharacteristicArray()."<br>";
}

$order = new Order(
    date("Y-m-d"),
    array($myShop -> getProductArray()[1] -> getProduct()),
    $payment,
    $delivery,
    $customer,
    $myShop->getShopName()
    );

echo "Order:<br>";

echo $order -> getShopName()."<br>";
foreach ($order -> getProducts() as $product) {
    echo $product-> getType()."<br>";
}

echo $order -> getCustomer() -> getName()."<br>".
     $order -> getDelivery() -> getPostType()."<br>".
     $order -> getOrderDate()."<br>";

/*echo "Decorator";
$decorator = new ProductDecorator($prod);
$bowDecorator = new Bow($decorator);
echo'showing price : ';
echo $decorator->showPrice();
echo'showing price with bow : ';
$bowDecorator->exclaimPrice();

echo $decorator->showPrice();
*/
