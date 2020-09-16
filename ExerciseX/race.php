<?php

$racersList = explode(", ", readline());
$racers = [];
$input = readline();

while ($input !== "end of race") {
    $name = preg_replace("/[^a-zA-Z]+/", "", $input);
    $km = preg_replace("/\D+/", "", $input);
    $km = array_sum(str_split($km));
    if (in_array($name, $racersList)) {
        if (!key_exists($name, $racers)) {
            $racers[$name] = $km;
        } else {
            $racers[$name] += $km;
        }
    }
    $input = readline();
}
arsort($racers);
$place = 1;
foreach ($racers as $racer=>$km) {
    if ($place == 1) {
        echo "1st place: ";
    } else  if ($place == 2) {
        echo "2nd place: ";
    } else {
        echo "3rd place: ";
    }
    echo "$racer".PHP_EOL;
    if ($place == 3) {
        break;
    }
    $place++;
}