<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 9:06 AM
 */
namespace Payment;

class  CashPayment implements IPayment
{
    public function getPaymentType()
    {
        // TODO: Implement getPaymentType() method.
        return 'Cash';
    }
}