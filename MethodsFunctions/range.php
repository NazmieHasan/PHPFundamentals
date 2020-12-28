<?php

$first = readline();
$second = readline();

$start = ord($first);
$end = ord($second);

printRange($start, $end);

function printRange(int $start, int $end) {
    if ($end < $start) {
    $temp = $end;
    $end = $start;
    $start = $temp;
    }

    for ($i = $start + 1; $i < $end; $i++) {
    echo chr($i)." ";
    }
}