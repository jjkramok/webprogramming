<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 22/9/2015
 * Time: 12:13 PM
 */
$LIMIT = 3;
$playlist = array();

for ($i = 0; $i < $LIMIT; $i++) {
    print("please enter track number " . ($i + 1) . ": \n");
    $playlist[$i] = trim(fgets(STDIN));
}
print_r($playlist);