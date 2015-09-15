<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 15/9/2015
 * Time: 12:48 PM
 */
$meal1 = "Pizza Hawaii";
$price1 = 8.50;
$meal2 = "Mac 'n Cheese";
$price2 = 5.25;
$meal3 = "Lasagna Bolognaise";
$price3 = 5.95;

$larger = trim(fgets(STDIN));

print("Welcome to Itali \n");
print($meal1 . " " . $price1 . ", large " . $price1 * $larger . "\n");
print($meal2 . " " . $price2 . ", large " . $price2 * $larger . "\n");
print($meal3 . " " . $price3 . ", large " . $price3 * $larger . "\n");
