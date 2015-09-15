<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 15/9/2015
 * Time: 1:01 PM
 */

$s = "aa";
print(strtoupper($s . " " . strlen($s) . "\n"));
$s = $s . $s;
print($s . " " . strlen($s) . "\n");
$s = $s . $s;
print(strtoupper($s . " " . strlen($s) . "\n"));