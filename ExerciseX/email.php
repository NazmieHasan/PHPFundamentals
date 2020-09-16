<?php

$pattern = "/(^| )[a-zA-Z0-9]+[\w\-.]*@[a-zA-Z-]+(\.[a-zA-Z]+)+/";
$str= readline();

preg_match_all($pattern, $str, $matches);

echo implode("\n", $matches[0]);