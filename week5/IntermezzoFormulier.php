<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 8/10/2015
 * Time: 12:11 PM
 */
?>

<html>
<form action="IntermezzoHandler.php">
    First name: <input type="text" name="fname" style="margin-bottom: 5px"> <br>
    Last name: <input type="text" name="lname"> <br>
    <b> Gender: </b> <br>
    Male <input type="radio" name="gender" value="male">
    Female <input type="radio" name="gender" value="female"> <br>
    <b>Products</b> <br>
    <input type="checkbox" name="product" value="iPod"> I have an iPod <br>
    <input type="checkbox" name="product" value="iPad"> I have an iPad <br>
    <input type="checkbox" name="product" value="iPhone"> I have an iPhone <br>
    <input type="submit" value="Send">
</form>
</html>