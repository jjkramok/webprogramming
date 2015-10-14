<html>

<form>
    <h2> Numberlist </h2>
    <?php
    if (isset($_GET["Verwerk"])) {

        $numberlist = explode(" ", $_GET["list"]);
        ?>
        <?php print("Som is " . array_sum($numberlist) . "\n"); ?> <br>
        <?php print("Aantal is " . count($numberlist) . "\n"); ?> <br>
        <?php print("Minimum is " . min($numberlist) . "\n"); ?> <br>
        <?php print("Maximum is " . max($numberlist) . "\n"); ?> <br>

    <?php
    }
    ?>
    <textarea name="list"></textarea>
    <input type="submit" name="Verwerk" value="submit">
</form>
</html>