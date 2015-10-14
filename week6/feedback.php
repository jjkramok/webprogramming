<html>
<form>
    <?php
    if (isset($_GET["feedback"])) {
        if ($_GET["feedback"] >= 1 AND $_GET["feedback"] <= 5) {
            print(str_repeat("*", $_GET["feedback"]));
        } else {
            print("Error: value must be between 1 and 5");
        }

    }
    ?> <br>
    Geef uw feedback: <br>
    <input type="number" name="feedback" min="1" max="5">
    <input type="submit" name="Verwerk">
</form>


</html>