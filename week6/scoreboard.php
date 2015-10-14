<html>


<?php
function evaluate_home() {
    // check if homescore is set, if so increase the homescore
    if (isset($_GET["IncHome"])) {
        echo $_GET["home"] + 1;
    } else {
        if (isset($_GET["IncOut"])) {
            echo $_GET["home"];
        } else {
            echo 0;
        }
    }
}

function evaluate_out() {
    // check if outscore is set, if so increase the outscore
    if (isset($_GET["IncOut"])) {
        echo $_GET["out"] + 1;
    } else {
        if (isset($_GET["IncHome"])) {
            echo $_GET["out"];
        } else {
            echo 0;
        }
    }
}
?>

<form action="scoreboard.php" method="get">
    <h2> Scoreboard </h2>
    Thuis:  <input type="text" value="<?php evaluate_home(); ?>" name="home"> <input type="submit" name="IncHome" value="Increase Homescore"> <br>
    Uit:    <input type="text" value="<?php evaluate_out(); ?>" name="out"> <input type="submit" name="IncOut" value="Increase Outscore"> <br>
</form>

</html>