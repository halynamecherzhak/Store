<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 9:02 AM
 */
namespace  Payment;

require __DIR__.'/IPayment.php';
use Payment\IPayment;

class CreditCardPayment implements IPayment
{
    public function getPaymentType()
    {
        // TODO: Implement getPaymentType() method.
        return 'Credit Card';
    }
}