<?php

$input = readline();
$output = [];

while ($input !== "end") {

    $args = explode(":", $input);
    $char = $args[0];
    $positions = explode("/", $args[1]);

    foreach ($positions as $position) {
        $output[$position] = $char;
    }
    $input = readline();
}

ksort($output);
echo implode($output).PHP_EOL;