<?php

$number = intval(readline());
$arrrayOne = [];
$arrayTwo = [];

for($i = 0; $i < $number; $i++) {
    $args = explode(" ",readline()); 
    if($i % 2 == 0) {
        $arrayOne[] = $args[0];
        $arrayTwo[] = $args[1];
    } else {
        $arrayTwo[] = $args[0];
        $arrayOne[] = $args[1];
    }
}

echo implode(" ", $arrayOne).PHP_EOL;
echo implode(" ", $arrayTwo).PHP_EOL;