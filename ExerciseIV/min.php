<?php

function minNum(int $n1, int $n2, int $n3) : int {
    if ($n1 < $n2 && $n1 < $n3) {
        return $n1;
    } else if ($n2 < $n3 && $n2 < $n1) {
        return $n2;
    }
    return $n3;
}

$number1 = readline();
$number2 = readline();
$number3 = readline();
$minimum = minNum($number1, $number2, $number3);

echo $minimum;