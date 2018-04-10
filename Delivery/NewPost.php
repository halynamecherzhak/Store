<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/6/2018
 * Time: 10:09 PM
 */

namespace  Delivery;

require __DIR__.'/IDelivery.php';
use Delivery\NewPost;

class NewPost implements IDelivery
{

    public function getPostName()
    {
        return "New Post";
    }

    public function getCost()
    {
        return 50;
    }

}