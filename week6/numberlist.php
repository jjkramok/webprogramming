<html>

<form>
    <h2> Numberlist </h2>
    <?php
    if (isset($_GET["Verwerk"])) {
        $raw_list = "";
        $raw_list = $_GET["list"];
        $refined_raw_list = str_replace(".", ",", $raw_list);
        $number_list = explode(" ", $raw_list);
        ?> <br>
        <?php print("Som is " . str_replace(".", ",", array_sum($number_list)) . "\n"); ?> <br>
        <?php print("Aantal is " . str_replace(".", ",", count($number_list)) . "\n"); ?> <br>
        <?php print("Minimum is " . str_replace(".", ",", min($number_list)) . "\n"); ?> <br>
        <?php print("Maximum is " . str_replace(".", ",", max($number_list)) . "\n"); ?> <br>

    <?php
    }
    ?>
    <textarea name="list"></textarea>
    <input type="submit" name="Verwerk" value="submit">
</form>
</html>