<?php

$input = readline();
$args = explode(" | ", $input);
$keysToSearch = explode(" | ", readline());
$command = readline();

$dictionary = [];
foreach ($args as $arg) {
    $tokens = explode(": ", $arg);
    $key = $tokens[0];
    $definition = $tokens[1];
    $dictionary[$key][] = $definition;
}

ksort($dictionary);
if ($command === "List") {
    foreach ($dictionary as $key=>$value); {
        echo $key . " ";
    }
} else {
    foreach ($dictionary as $word => $definitions) {
        if (in_array($word, $keysToSearch)) {
            echo $word . PHP_EOL;
            usort($definitions, function ($el1, $el2) use ($definitions) {
                return strlen($el2) <=> strlen($el1);
            });
            foreach ($definitions as $definition) {
                echo " -$definition".PHP_EOL;
            }
        }
    }
}
