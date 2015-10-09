<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 6/10/2015
 * Time: 11:43 AM
 */

// returns first of equally longest strings in an array
function getLongest($array) {
    $temp_result = "";
    foreach ($array as $word) {
        if (strlen($word) > $temp_result) {
            $temp_result = $word;
        }
    }
    return $temp_result;
}

function isAscending($array) {
    $temp_result = true;
    for ($i = 0; $i < count($array) + 1; $i++) {
        if ($array[$i] > $array[$i+1]) {
            $temp_result = false;
        }
    }
    return $temp_result;
}

function getHighestOnIndexZip($array1, $array2) {
    $result_array = [];
    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] >= $array2[$i]) {
            array_push($result_array, $array1[$i]);
        } else {
            array_push($result_array, $array2[$i]);
        }
    }
    return $result_array;
}

function getHighestOnIndexFillingZip($array1, $array2) {
    $result_array = [];
    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] >= $array2[$i]) {
            array_push($result_array, $array1[$i]);
        } else {
            array_push($result_array, $array2[$i]);
        }
    }

    // maybe array2 is longer and has some leftover values
    if (count($array2) > count($array1)) {
        for ($i = count($array1); $i < count($array2); $i++) {
            array_push($result_array, $array2[$i]);
        }
    }
    return $result_array;
}

//print_r(getHighestOnIndexFillingZip([3,15,33], [2,3,4,5,22,75]));





