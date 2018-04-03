<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/3/2018
 * Time: 12:25 PM
 */
namespace Service;

class Bow implements ServiceInterace
{
 public  $serviceName;

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param mixed $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    public function getServicePrice()
    {
        // TODO: Implement getServicePrice() method.
        return 25;
    }
}