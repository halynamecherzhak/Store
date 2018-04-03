<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/27/2018
 * Time: 11:10 AM
 */
namespace Payment;

use Shop\Shop;
use Delivery\Delivery;

class Payment
{
    private $type_payment;

    public function __construct($type_payment)
    {
        $this -> type_payment = $type_payment;
    }

    public function getTypePayment()
    {
        return $this->type_payment;
    }


}


