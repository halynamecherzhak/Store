<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/3/2018
 * Time: 12:18 PM
 */
namespace Service;

class Packing implements ServiceInterace
{
  public  $serviceName;

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
    public function getServicePrice(){
        return 20;

    }


}