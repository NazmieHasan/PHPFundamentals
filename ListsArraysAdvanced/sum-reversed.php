<?php

$arr = explode(" ", readline());

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = strrev($arr[$i]);
}
echo array_sum($arr);