<?php

$input = readline();
$arr = [];
for ($i = 0; $i < strlen($input); $i++) {
    $current = $input[$i];
    $arr[$current][] = $i;
}
foreach ($arr as $key => $positions) {
    echo "$key:".implode("/", $positions).PHP_EOL;
}
