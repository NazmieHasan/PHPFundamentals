<?php

$animals = [];
$areas = [];

$input = readline();
while($input !== "Last Info") {
    $args = explode(":", $input);
    $command = $args[0];
    $animalName = $args[1];
    $areaName = $args[3];
    if ($command === "Add") {
        $dailyFoodLimit = $args[2];
        if (!key_exists($animalName, $animals)) {
            $animals[$animalName] = $dailyFoodLimit;
            if (!$key_exists($areaName, $areas)) {
                $areas[$areaName] = 1;
            } else {
                $areas[$areaName] ++;
            }
        } else {
            $animals[$animalName] += $dailyFoodLimit;
        }
    } else {
        $food = $args[2];
        if ($key_exists($animalName, $animals)) {
            $animals[$animalName] -= $food;
            if ($animals[$animalName] <= 0) {
                echo "$animalName was successfully fed".PHP_EOL;
                $areas[$areaName]--;
            }
        }
    }
    $input = readline();
}

ksort($animals);
arsort($animals);
echo "Animals:".PHP_EOL;
foreach ($animals as $animal => $food) {
    if ($food > 0) {
        echo "$animal -> $food" . "g" . PHP_EOL;
    }
}

arsort($areas);
echo "Areas with hungry animals:".PHP_EOL;
foreach ($areas as $areaName => $hungryAnimals) {
    if ($hungryAnimals > 0) {
        echo "$areaName : $hungryAnimals" . PHP_EOL;
    }
}