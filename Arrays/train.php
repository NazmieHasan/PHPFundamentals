<?php

number = intval(readline());
$train = [];
$sum = 0;
for ($i = 0; $i < $number; $i++) {
    $current = intval(readline());
    $train[$i] = $current;
    $sum += $current;
}
echo implode(" ", $train).PHP_EOL;
echo $sum;