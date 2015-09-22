<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 22/9/2015
 * Time: 12:01 PM
 */

$classlist = array('Tobias', 'Hasna', 'Aukje', 'Fred');
print_r($classlist);
for ($i = 0; $i < count($classlist); $i++) {
    print($i.": " . $classlist[$i] . "\n");
}
asort($classlist);
print_r($classlist);


