<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 9:03 AM
 */
namespace Payment;

class WebMoneyPayment implements IPayment
{
    public function getPaymentType()
    {
        // TODO: Implement getPaymentType() method.
        return 'Web Money';
    }
}