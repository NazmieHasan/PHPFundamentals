<?php

$number = intval(readline());
$bestSnowballValue = 0;
$bestQuality = 0;
$bestSnowballSnow = 0;
$bestSnowballTime = 0;

for ($i = 0; $i < $number; $i++) {
$snowballSnow = intval(readline());
$snowballTime = intval(readline());
$snowballQuality = intval(readline());

    $snowballValue = bcpow(($snowballSnow / $snowballTime), $snowballQuality);
    
    if ($snowballValue > $bestSnowballSnow) {
        $bestSnowballValue = $snowballValue;
        $bestQuality = $snowballQuality;
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
    }
}

echo "$bestSnowballSnow : $bestSnowballTime = $bestSnowballValue ($bestQuality)";