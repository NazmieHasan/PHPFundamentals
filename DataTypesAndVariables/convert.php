<?php

$meters = intval(readline());
$kilometers = $meters / 1000;
$kilometers = number_format($kilometers, 2, ".", "");
echo $kilometers;