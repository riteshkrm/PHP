<?php

do {
    $diceRoll = rand(1, 6);
    echo"You rolled a $diceRoll\n";
    if(6 == $diceRoll) {
        echo "congrats \n";
         break;
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
}while('y' == $rollAgain);