<?php

$number = intval(readline());
$sum = 0;

while ($number > 0) {
    $sum += $number % 10;
    $number = intval($number / 10);
}

echo $sum;