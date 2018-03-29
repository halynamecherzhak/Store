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


use Characteristic\Characteristic;
use Product\Product;
use Customer\Customer;
use Delivery\Delivery;
use Order\Order;
use Payment\Payment;
use Bow\Bow;
use ProductDecorator\ProductDecorator;


$flower=new Product('tulip',15,'plant');
$flowerPot=new Product('flowerpot',50,'plant');
$chocolate=new Product('chocolate',30,'sweet');

$customer1=new Customer("Halyna","galya.mech@gmail.com","Doroshenka35");
$deliver=new Delivery("Lviv","NewPost",50);
$order=new Order("2018-03-23","tulip,chocolate",100);
$payment=new Payment();

//output available products
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
echo "Date: ".$order->getOrderDate()."<br>"."Goods: ".$order->getProducts()."<br>"."Payment: ".$order->getPayment()."<br>";

/*echo"Price";
echo $payment->totalPayment();*/
echo "Decorator";
$prod=new Product("rose",20,"plant");

$decorator = new ProductDecorator($prod);
$bowDecorator = new Bow($decorator);
echo'showing price : ';
echo $decorator->showPrice();
echo'showing price with bow : ';
$bowDecorator->exclaimPrice();

echo $decorator->showPrice();

