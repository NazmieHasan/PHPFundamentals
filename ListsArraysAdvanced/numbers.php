<?php

$arr = explode(" ", readline());
$props = explode(" ", readline());
$value = (int)$props[0];
$power = (int)$props[1];

$index = array_search($value, $arr);
$toRemove = 2 * $power + 1;
$toRemoveFromIndex = $index - $power;

array_splice($arr, $toRemoveFromIndex, $toRemove);
echo array_sum($arr);
