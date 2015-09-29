<html>
<head>
    <style>
        * {font-family: monospace}
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 29/9/2015
 * Time: 12:44 PM
 */


function printChapter($chapter_title, $page_number) {
    $AMOUNT_OF_DOTS = 50;
    $dots = str_repeat(".", $AMOUNT_OF_DOTS - strlen($chapter_title));
    print($chapter_title . $dots . $page_number . "<br>");
}

$hoofdstukken = array(
    "Voorwoord" => 5,
    "Inleiding" => 7,
    "Expressionisme" => 9,
    "Surrealisme" => 29,
    "Kubisme" => 53,
    "Dada" => 66,
    "Futurisme" => 90,
    "Nieuwe zakelijkheid" => 99,
    "De Stijl" => 121,
    "Cobra" => 144,
    "Literatuur" => 158);


foreach($hoofdstukken as $title => $page_nunmber) {
    printChapter($title, $page_nunmber);
}
?>
</body>
</html>