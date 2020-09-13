<?php

$items = explode("|", readline());
$count = count($items);
$budget = floatval(readline());

$maxClothes = 50;
$maxShoes = 35;
$maxAccessories = 20.5;

$boughtItems = [];
$profit = 0;

for ($i = 0; $i < $count; $i++) {
    $args = explode("->", $items[$i]);

    $type = $args[0];
    $price = $args[1];
    if ($budget >= $price) {
        if ($type === "Clothes") {
            if ($price <= $maxClothes) {
                $boughtItems[] = number_format($price * 1.4, 2);
                $budget -= $price;
                $profit += $price * 0.4;
            }
        } else if ($type === "Shoes") {
            if ($price <= $maxShoes) {
                $boughtItems[] = number_format($price * 1.4, 2);
                $budget -= $price;
                $profit += $price * 0.4;
            }
        } else {
            if ($price <= $maxAccessories) {
                $boughtItems[] = number_format($price * 1.4, 2);
                $budget -= $price;
                $profit += $price * 0.4;
            }
        }
    }
}

echo implode(" ", $boughtItems).PHP_EOL;
printf ("Profit: %.2f\n", $profit);
$totalSum = array_sum($boughtItems) + $budget;
if ($totalSum >= 150) {
    echo "Hello, France!" . PHP_EOL;
} else {
    echo "Time to go." . PHP_EOL;
}
