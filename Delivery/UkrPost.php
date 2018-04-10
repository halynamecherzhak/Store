<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/6/2018
 * Time: 10:15 PM
 */

namespace Delivery;

class UkrPost implements IDelivery
{

    public function getPostName()
    {
        // TODO: Implement getPostName() method.
        return "Ukr Post";

    }

    public function getCost()
    {
        // TODO: Implement getCost() method.
        return 20;

    }
}