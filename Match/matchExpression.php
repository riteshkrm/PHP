<?php
 // match was introduced in PHP 8.0!
 // similar like switch 

$status = 200;

$massage =  match ($status) {
    200, 300=> "Success",
    400,404,500, => "Error",
    default => "Unknown Status",
};

echo $massage . "\n";