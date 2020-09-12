<?php

$quantity = intval(readline());
$days = intval(readline());
$spirit = 0;
$cost = 0;

for ($i = 1; $i <= $days; $i++) {
    if ($i % 11 == 0) {
        $quantity += 2;
    }
    if ($i % 2 == 0) {
        $cost += $quantity * 2;
        $spirit += 5;
    }
    if ($i % 3 == 0) {
        $cost += $quantity * 5;
        $cost += $quantity * 2;
        $spirit += 13;
    }
    if ($i % 5 == 0) {
        $cost += $quantity * 15;
        $spirit += 17;
        if ($i % 3 == 15) {
            $spirit += 30;
        }
    }
    if ($i % 10 == 0) {
        $spirit -= 20;
        $cost += 23;
    }
}

if ($days % 10 == 0) {
    $spirit -= 30;
}

echo "Total cost: $cost".PHP_EOL;
echo "Total spirit: $spirit".PHP_EOL;