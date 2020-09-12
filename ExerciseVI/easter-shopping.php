<?php

$shops = explode(" ", readline());
$n = intval(readline());

for ($i = 0; $i < $n; $i++) {

    $args = explode(" ", readline());
    $command = $args[0];

    switch ($command) {
        case "Include":
            $shop = $args[1];
            $shops[] = $shop;
            break;
        case "Visit":
            $count = intval($args[2]);
            if ("first" === $args[1]) {
                if ($count > 0 && $count <= $count($shops)) {
                    array_splice($shops, 0, $count);
                }
            } else {
                if ($count > 0 && $count <= $count($shops)) {
                    $start = count($shops) - $count;
                    array_splice($shops, $start, $count);
                }
            }
            break;
        case "Prefer":
            $index1 = $args[1];
            $index2 = $args[2];
            if (isset($shops[$index1]) && isset($shops[$index2])) {
                $temp = $shops[$index1];
                $shops[$index1] = $shops[$index2];
                $shops[$index2] = $temp;
            }
            break;
        case "Place":
            $shop = $args[1];
            $index = (int)$args[2];

            if ($index >= 0 && $index < count($shops)) {
                array_splice($shops, $index + 1, 0, $shop);

            }

    }
}

echo "Shops left:\n";
echo implode(" ", $shops);
