<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/22/2018
 * Time: 10:25 AM
 */

namespace  Delivery;

class Delivery
{
    private $city;
    private $post_type;
    private $delivery_cost;
    private $delivery_type;

    public  function __construct($city, $post_type, $delivery_cost, $delivery_type)
    {
        $this -> city = $city;
        $this -> post_type = $post_type;
        $this -> delivery_cost = $delivery_cost;
        $this -> delivery_type = $delivery_type;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getPostType()
    {
        return $this->post_type;
    }

    public function setPostType($post_type)
    {
        $this->post_type = $post_type;
    }

    public function getDeliveryCost()
    {
        return $this->delivery_cost;
    }

    public function setDeliveryCost($delivery_cost)
    {
        $this->delivery_cost = $delivery_cost;
    }


}
