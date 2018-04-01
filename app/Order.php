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
  private $products;
  private $payment;
  private $delivery;
  private $customer;
  private $shopName;

  public function __construct($order_date, $products, $payment, $delivery, $customer, $shopName)
  {
      $this -> order_date = $order_date;
      $this -> products = $products;
      $this -> payment = $payment;
      $this -> delivery = $delivery;
      $this -> customer = $customer;
      $this -> shopName = $shopName;
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

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return mixed
     */
    public function getShopName()
    {
        return $this->shopName;
    }

}
