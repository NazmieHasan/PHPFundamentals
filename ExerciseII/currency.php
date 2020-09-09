<?php

$pounds = floatval(readline());
$dollars = $pounds * 1.31;
$output = number_format($dollars, 3, ".", "");
echo $output;