<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 22/9/2015
 * Time: 12:52 PM
 */

$array = array("Assen" => 14.6, "Maastricht" => 17.4, "Zwolle" => 15.2,
        "Moskou" => -2.4);
asort($array);
print("de max van deze lijst is " . end($array));
