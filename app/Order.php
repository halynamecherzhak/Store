<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/28/2018
 * Time: 10:39 AM
 */

namespace Order;

class Order
{
  private $order_date;
  private $products = [];
  private $payment;

  public function __construct($order_date,$products=[],$payment)
  {
      $this->order_date=date("Y-m-d");
      $this->products=$products= [];
      $this->payment=$payment;
  }
    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return false|string
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }


}
