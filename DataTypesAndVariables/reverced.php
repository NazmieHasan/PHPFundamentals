<?php

$chars = "";

for ($i = 0; $i < 3; $i++) {
    $chars .= readline();
}
$output ="";
for ($i = 2; $i >= 0; $i--) {
    $output .= $chars[$i] ." ";
}

echo $output;