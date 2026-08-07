<?php

$secret = "magic";
$attempts = 0;
$maxattempts = 3;

while ($attempts < $maxattempts) {
    echo"Guess the password:  ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Correct";
    } elseif($attempts == $maxattempts) {
        echo "you reached your attempts";
    }else{
        echo "Attempts Left :- " .($maxattempts - $attempts) . "\n";
    }

}