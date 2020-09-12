<?php

$budget = floatval(readline());
$priceFlour = floatval(readline());

$priceEggs = $priceFlour * 0.75;
$priceMilk = ($priceFlour * 1.25) / 4;

$pricePerCozonac = $priceFlour + $priceEggs + $priceMilk;
$cozonacCount = 0;
$coloredEggs = 0;

while ($budget >= $pricePerCozonac) {
    $cozonacCount++;
    $coloredEggs+= 3;
    $budget -= $pricePerCozonac;
    if ($cozonacCount % 3 == 0 ) {
        $coloredEggs -= $cozonacCount - 2;
    }
}
printf ("You made $cozonacCount cozonacs! Now you have $coloredEggs eggs and %.2fBGN left.", $budget);