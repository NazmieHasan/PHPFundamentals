<?php

$days = intval(readline());
$players = intval(readline());
$groupsEnergy = floatval(readline());
$groupsWater =  floatval(readline() * $players * $days);
$groupsFood = floatval(readline() * $players * $days);

for ($i = 1; $i <= $days; $i++) {
    $energyLose = readline();
    $groupsEnergy -= $energyLose;
    if ($groupsEnergy <= 0) {
        break;
    }

    if ($i % 2 == 0) {
        $groupsEnergy = $groupsEnergy + 0.05 * $groupsEnergy;
        $groupsWater = $groupsWater - 0.3 * $groupsWater;
    }
    if ($i % 3 == 0) {
        $groupsEnergy = $groupsEnergy + 0.1 * $groupsEnergy;
        $groupsFood = $groupsFood - $groupsFood / $players;
    }
}

if ($groupsEnergy > 0) {
    printf("You are ready for the quest. You will be left with - %.2f energy!", $groupsEnergy);
} else {
    printf("You will run out of energy. You will be left with %.2f food and %.2f water.", $groupsFood, $groupsWater);
}
