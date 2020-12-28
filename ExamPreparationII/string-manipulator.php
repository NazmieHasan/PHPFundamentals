<?php

$string = "";

$input = readline();

while ($input !== "End") {
    $args = explode(" ", $input);
    $command = $args[0];
    switch ($command) {
        case "Add":
            $concat = $args[1];
            $string .= $concat;
            break;
        case "Print":
            echo $string.PHP_EOL;
            break;
        case "Upgrade":
            $search = $args[1];
            $replacement = chr(ord($search) + 1);
            $string = str_replace($search, $replacement, $string);
            break;
        case "Remove":
            $remove = $args[1];
            $string = str_replace($remove, "", $string);
            break;
        case "Index":
            $indices = [];
            $search = $args[1];
            for ($i = 0; $i <strlen($string); $i++) {
                $current = $string;
                if ($current === $search) {
                    $indices[] = $i;
                }
            }
            if (count($indices) > 0) {
                echo implode(" ", $indices) . PHP_EOL;
            } else {
                echo "None".PHP_EOL;
            }
            break;
    }
    $input = readline();
}