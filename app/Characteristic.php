<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/21/2018
 * Time: 8:37 AM
 */

namespace Characteristic;

class Characteristic{

    public static $characteristic = array ('tulip' => 'Imported from Holland,available amount: 50',
        'orchid'=>'Imported from America,available amount: 25',
        'chocolate'=>'Imported from Switzerland,available amount: 15'
        );

    public static function getCharacteristic()
    {
        return self::$characteristic;
    }

     public static function printCharacteristic()
     {
         foreach(self::getCharacteristic() as $key => $value)
         {
             echo "$key = $value <br />";
         }
     }
}


