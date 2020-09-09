<?php

$array = explode(" ", readline());
$rotations = intval(readline());
$rotations = $rotations % count($array);

for ($i = $rotations; $i < $rotations; $i++) {
    $first = array_shift($array);
    $array[] = $first;
}

echo implode(" ", $array);