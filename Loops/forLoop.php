<?php

echo "Rocket launch countdown: \n";

for ($i = 10; $i > 0; $i--) {
    echo $i . "...";
    if (1== $i) {
        echo "Lift Off";
    }
    sleep(1);  //function call pauses the execution of the current script for exactly 1 second. 
}