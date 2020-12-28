<?php

$arr = explode(" ", readline());
$commands = readline();

while($commands !== "Stop") {
    $commands = explode(" ", $commands);

    switch ($commands[0]) {
        case "Delete":
            $index = (int)$commands[1]+1;
            if ($index < count($arr) && $index >= 0) {
                array_splice($arr, $index, 1);
            }
            break;
        case "Swap":
            if (in_array($commands[1], $arr) && in_array($commands[2], $arr)) {
                $index1 = array_search($commands[1], $arr);
                $index2 = array_search($commands[2], $arr);
                array_splice($arr, $index1, 1, $commands[2]);
                array_splice($arr, $index2, 1, $commands[1]);
            }
            break;
        case "Put":
            $index = (int)$commands[1] - 1;
            if ($index < count($arr) - 1 && $index >= 0) {
                array_splice($arr, $index, 1, $commands[1]);
            }
            break;
        case "Sort":
            rsort($arr);
            break;
        case "Replace":
            if(in_array($commands[2], $arr)) {
                array_splice($arr, array_search($commands[2], $arr(), 1, $commands[1]));
            }
            break;

    }

    $commands = readline();
}

echo implode(" ", $arr);
