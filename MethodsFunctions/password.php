<?php

$password = readline();
$validLength = hasValidLength($password);
$validContent = hasValidContent($password);
$enoughDigits = hasEnoughDigits($password);

if (!$validLength) {
    echo "Password must be between 6 and 10 characters" . PHP_EOL;
}
if (!$validContent) {
    echo "Password must consist only of letters and digits" . PHP_EOL;
}
if (!$enoughDigits) {
    echo "Password must have at least 2 digits" . PHP_EOL;
}

if ($validLength && $validContent && $enoughDigits) {
    echo "Password is valid";
}

function hasValidLength(string $password) : bool
{
    if (strlen($password) < 6 && strlen($password) > 10) {
        return false;
    }
    return true;
}

function hasValidContent(string $password) : bool
{
    if (!ctype_alnum($password)) {
        return false;
    }
    return true;
}

function hasEnoughDigits(string $password) : bool
{
    $totalDigits = 0;
    for ($i = 0; $i < strlen($password); $i++) {
        $current = $password[$i];
        if (ctype_digit($current)) {
            $totalDigits++;
        }
    }
    if ($totalDigits < 2) {
        return false;
    }
    return true;
}