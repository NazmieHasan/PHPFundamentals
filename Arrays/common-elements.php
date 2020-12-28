<?php

$arrayOne = explode(" ",readline());
$arrayTwo = explode(" ",readline());
$arrrayCommon = [];
$count1 = count($arrayOne);
$count2 = count($arrrayTwo);

for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count2; $j++) {
        if ($arrayOne[$i] === $arrayTwo[$j]) {
            $arrayCommon[] = $arrayOne[$i];
        }
    }
}

echo implode(" ", $arrayCommon);