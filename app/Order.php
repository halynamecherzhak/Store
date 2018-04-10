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
  private $deliveryType;
  private $deliveryCost;
  private $customer;
  private $shopName;

  public function __construct($order_date, $products, $payment, $deliveryType, $deliveryCost, $customer, $shopName)
  {
      $this -> order_date = $order_date;
      $this -> products = $products;
      $this -> payment = $payment;
      $this -> deliveryType = $deliveryType;
      $this -> deliveryCost = $deliveryCost;
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
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @return mixed
     */
    public function getDeliveryCost()
    {
        return $this->deliveryCost;
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
