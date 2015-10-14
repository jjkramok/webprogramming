<html>

<form>
    <h2> Numberlist </h2>
    <?php
    if (isset($_GET["Verwerk"])) {
        $raw_list = "";
        $raw_list = $_GET["list"];
        $refined_raw_list = str_replace(".", ",", $raw_list);
        print_r($refined_raw_list);
        $number_list = explode(" ", $raw_list);
        print_r($number_list);
        ?> <br>
        <?php print("Som is " . array_sum($number_list) . "\n"); ?> <br>
        <?php print("Aantal is " . count($number_list) . "\n"); ?> <br>
        <?php print("Minimum is " . min($number_list) . "\n"); ?> <br>
        <?php print("Maximum is " . max($number_list) . "\n"); ?> <br>

    <?php
        #TODO AFTER SHOWING VARIABLE REPLACE THE DOTS
        print_r($number_list);
    }
    ?>
    <textarea name="list"></textarea>
    <input type="submit" name="Verwerk" value="submit">
</form>
</html>