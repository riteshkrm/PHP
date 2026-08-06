<?php
// What is expression?
// Anything that has value, that called expression..
// Can't use php reserved words :- $this, $class, $function

//  (\n) use for new line
echo "Learing php \n";

// Variable Expression
$name = "Ritesh Sharma";


// Concatenation Operator ( string . Dot)
echo "Name :- "  . $name . "\n";

// Arithmetic Operator (+, -. *, /, %)

$pizzas = 3;
$slicesPerPizzas = 8;

$totalSlices = $pizzas * $slicesPerPizzas;

echo "Total pizza slices :- " . $totalSlices .  "\n";

// Boolean value

$isHungry = false ;
echo "Hungry?";
echo $isHungry ?  "yes" :  "no"; // ternary operator
echo "\n";