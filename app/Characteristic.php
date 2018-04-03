<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/21/2018
 * Time: 8:37 AM
 */

namespace Characteristic;

class Characteristic{

   private $characteristicArray;

    public function __construct($characteristicArray)
    {
        $this -> characteristicArray = $characteristicArray;
    }

    //return characteristicList

    public function getCharacteristicArray()
    {
        $characteristicList  = "";
        foreach ($this -> characteristicArray as $item)
        {
            $characteristicList .= $item."<br>";
        }
        return $characteristicList;
    }
}


