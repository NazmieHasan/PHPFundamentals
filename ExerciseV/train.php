<?php

$train = explode(" ", readline());
$capacity = readline();

$input = readline();

while ($input !== "end") {
    $args = explode(" ", $input);
    $command = $args[0];

    if ($command === "Add") {
        $wagon = $args[1];
        $train[] = $wagon;
    } else {
        $passengers = intval($args[0]);
        for ($i = 0; $i < count($train); $i++) {
            if ($train[$i] + $passengers <= $capacity) {
                $train[$i] += $passengers;
                break;
            }
        }
    }
    $input = readline();
}
echo implode(" ", $train);