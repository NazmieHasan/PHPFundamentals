<?php

$user = readline();
$pass = strrev($user);
$attempts = 0;

while($attempts++ < 6) {
    $input = readline();
    if ($input === $pass) {
        echo "User $user logged in.".PHP_EOL;
        break;
    }
    if ($attempts === 4) {
        echo "User $user blocked!".PHP_EOL;
        break;
    } else {
    echo "Incorrect password. Try again.".PHP_EOL;
    }
}