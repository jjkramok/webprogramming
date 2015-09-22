<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 22/9/2015
 * Time: 12:19 PM
 */
$class_list = array("tobias", "hasna", "aukje", "fred",
    "sep", "koen", "wahed", "anna", "jackie", "rashida",
    "winston", "sammy", "manon", "ben", "karim", "bart",
    "lisa");
//appends an element to the array
array_push($class_list, "tom");

foreach ($class_list as $nr => $student) {
    $student = ucfirst($student);
    print(($nr + 1) . ": " . $student . "\n");
}