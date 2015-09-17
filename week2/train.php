<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 17/9/2015
 * Time: 10:37 AM
 */
print("Heb je een studenten OV?");
$student = fgets(STDIN);
$reductions = 1;
if ($student == 'ja') {
    print("week of weekend OV?");
    $ov_type = fgets(STDIN);
    $reductions = 0.4;
}

$wages = 0.1;
print('What is the travel distance in km?');
$distance = fgets(STDIN);

$fee = $wages * $distance;
if ($student == 'ja') {
    $fee = $fee * $reductions;
}
print('Your fee has been calculated: €' . $fee);


/*
$b = 3;
$a = $b;
$b = 4;
print($a . $b);

$b = 3;
$a = &$b;
$b = 4;
print($a . $b);
*/