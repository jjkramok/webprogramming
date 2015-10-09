<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 8/10/2015
 * Time: 11:23 AM
 */

$temp = ["Amsterdam" => 13.6, "Zwolle" => 15.2, "Maastricht" => 17.4, "Assen" => 14.6];
?>

<html>
<table style="border: dotted; background-color: dodgerblue">
    <thead>
        <b>Plaats</b>
    </thead>
    <?php
        foreach ($temp as $plaats => $temparatuur) {
            print("<tr> \n");
            print("<td> " . $plaats . "</td><td>" . $temparatuur . "</td>");
            print("</tr> \n");
        }
    ?>
    <tr>
        <td>Gemiddelt</td> <td> <?php print(array_sum($temp) / count($temp)) ?> </td>
    </tr>
</table>
</html>