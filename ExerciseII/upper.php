<?php

$char = readline();
$ascii = ord($char);

if ($ascii >= 65 && $ascii <= 90) {
    echo "upper-case";
} else if ($ascii >= 97 && $ascii <= 122) {
    echo "lower-case";
}      