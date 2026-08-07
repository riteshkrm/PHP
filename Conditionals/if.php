<?php
/*
 Symbol      Meaning                         Example                       

 `==`     Equal to                                 `if ($a == $b)`               
 `===`   Strictly equal (value + type)  `if ($a === $b)`              
 `!=`      Not equal                              `if ($a != $b)`               
 `<>`      Not equal (SQL/PHP)            `if ($a <> $b)`               
 `!==`    Strictly not equal                  `if ($a !== $b)`              
 `>`       Greater than                         `if ($a > $b)`                
 `<`       Less than                              `if ($a < $b)`                
 `>=`     Greater than or equal           `if ($a >= $b)`               
 `<=`     Less than or equal                `if ($a <= $b)`               
 `&&`    Logical AND                         `if ($a > 0 && $b > 0)`       
 `\\`     Logical OR                           `if ($a > 0 \\ $b > 0)`     
 `!`        Logical NOT                        `if (!$isLoggedIn)`           
 `and`   AND (PHP keyword)             `if ($a and $b)`              
 `or`     OR (PHP keyword)               `if ($a or $b)`               
 `xor`   Exclusive OR (PHP)             `if ($a xor $b)`              
 `? :`    Ternary operator                `$max = ($a > $b) ? $a : $b;` 
 `??`     Null coalescing                   `$name = $user ?? "Guest";`   

*/
$x = -3;

if ($x == 10){
    echo "equal to then \n";
}else{
    echo "Not Equal \n";
}

// nexted if esle

if ($x > 0){  
    if($x % 2 == 0){
        echo "\nPositive even number\n";
    } else{
        echo "\nPositive odd number";
    }         
}else{
    echo "\nNon-positive number\n";
}


$username = "admin";
$password ="admin123";

if ($username == "admin" && $password == "admin123"){
    echo "User Loggin";
}else{
    echo "Incorrect Username and password";
}