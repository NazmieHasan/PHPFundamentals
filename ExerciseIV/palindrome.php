<?php

$input = readline();
while ($input !== "END") {
    $isPalindrome = isPalindrome($input);
    if ($isPalindrome) {
        echo "true".PHP_EOL;
    }
    else {
        echo "false".PHP_EOL;
    }
    $input = readline();
}

function isPalindrome(string $str) {
    $rev = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $rev.= $str[$i];
    }
    if ($str === $rev) {
        return true;
    }
    return false;
}