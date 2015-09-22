<?php
/**
 * Created by PhpStorm.
 * User: Kramok
 * Date: 22/9/2015
 * Time: 12:41 PM
 */

//not used, a random card value
$cart = rand(1, 52);
//not used, a random d6 value
$die = rand(1, 6);

$score = 0;
while ($score < 250) {
    print("You throw the die, it shows a " . ($die = rand(1, 6)) . "\n");
    if ($die % 2 == 0) {
        for ($i = 0; $i < $die; $i++) {
            $score += ($card = rand(1, 52));
            print("You draw a card, its value is " . $card . "\n");
        }
    }
}
print("You win! your final score is " . $score);