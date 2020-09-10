<?php

$arr = explode(" ", readline());
$command = readline();
while ($command !== "end") {

    $tokens = explode(" ", $command);
    $action = $tokens[0];
    $number = $tokens[1];

    switch ($action) {
        case "exchange":
            $arr = exchange($arr, $number);
            break;
    }


    $command = readline();
}

function exchange(array $arr, int $exchange)
{
    for ($i = $exchange; $i < count($arr); $i++) {
        $first = array_shift($arr);
        $arr[] = $first;
    }
    return $arr;
}

echo "[".implode(", ", $arr)."]" ;