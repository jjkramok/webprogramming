<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 29/9/2015
 * Time: 12:07 PM
 */



// guesses number between 1 and 100
function memoryRandomSearch($value) {
    $memory_array = array();
    for($i = 0; $i < 100; $i++) {
        $memory_array[$i] = $i + 1;
    }
    $found = false;
    while(!$found) {
        $guess_index = rand(0, count($memory_array) - 1);
        print("guessing on " . $memory_array[$guess_index] . " \n");
        if ($memory_array[$guess_index] == $value) {
            $found = true;
            print("found! \n");
        } else {
            array_splice($memory_array, $guess_index, 1);
        }
    }

}

memoryRandomSearch(3);