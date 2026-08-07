<?php

$size ="M";
  switch ($size){
    case "s";
    case "m";
        echo "Small or Medium size";
        break;
    case "L";
    case"XL";
    echo "Large or Extra Large size";
    break;
    default;
    echo "unknown size";
  };

  $badAttempts = 2;

  switch ($badAttempts){
    case 3;
    echo "You are bloacked!";

    case 2;
    echo "Bad attempt detected";
  };