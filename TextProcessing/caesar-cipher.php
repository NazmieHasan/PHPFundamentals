<?php

$word = readline();
$output = "";

for ($i = 0; $i < strlen($word); $i++) {
    $current = ord($word[$i]) + 3;
    $output .=chr($current);
}
echo $output;