<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/20/2018
 * Time: 11:43 PM
 */
namespace Customer;

class Customer
{
    private $name;
    private $email;
    private $address;

    public function __construct($name,$email,$address)
    {
        $this->name=$name;
        $this->email=$email;
        $this->address=$address;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
