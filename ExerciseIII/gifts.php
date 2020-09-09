<?php

$array = explode(" ", readline());
$count = count($array);

$input = readline();
while ($input !== "No Money") {
    $args = explode(" ", $input);
    $command = $args[0];
    $gift = $args[1];
    
    if ($command === "OutOfStock") {
        for ($i = 0; $i < $count; $i++) { 
            if ($arra[$i] === $gift) {
                $array[$i] = "None";
            }
        }
    } else if ($command === "Required") {
        $array[$args[2]] = $gift;
    }
    else if ($command === "JustInCase") {
        $array[$count - 1] = $gift;
    }

    $input = readline();
}

for ($i = 0; $i < $count; $i++) {
    if ($array[$i] !== "None") {
        echo $array[$i] . " ";
    }
}