<?php

$pattern = '/^([A-Za-z-9!@#$?]+)=(\d+)<<(.+)$/';

$input = readline();

while ("Last note" !== $input) {
    if (preg_match($pattern, $input, $match)) {
        $peakName = $match[1];
        $geoLength = intval($match[2]);
        $geoHash = $match[3];
        $peakName = str_replace(["!", "#", "@", "$", "?"], "", $peakName);
        if (strlen($geoHash) !== $geoLength || strlen($peakName) < 1) {
            echo "Nothing found!" . PHP_EOL;
        } else {
            echo "Coordinates found! $peakName -> $geoHash" . PHP_EOL;
        }
    } else {
        echo "Nothing found!" . PHP_EOL;
    }
    $input = readline();
}