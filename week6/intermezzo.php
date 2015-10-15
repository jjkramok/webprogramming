<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 15/10/2015
 * Time: 11:00 AM
 */


$db = "mysql:host=localhost;dbname=cursus;port=3307";
#$db = "mysql:host=localhost;dbname=cursus;port=3307";
$user = "root";
$pass = "usbw";
$pdo = new PDO($db, $user, $pass);

$stmt = $pdo->prepare("SELECT * FROM medewerker");
$stmt->execute();

while ($row = $stmt->fetch()) {
    print($row[1] . " " . $row[4] . "\n");
}

// close connection
$pdo = NULL;
